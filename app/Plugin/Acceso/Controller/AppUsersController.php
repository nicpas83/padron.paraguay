<?php

App::uses('UsersController', 'FmwAcceso.Controller');

class AppUsersController extends UsersController {

    public $uses = array("Acceso.AppUser", "FmwAcceso.User");

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('insertar_huella');
    }

    public function add($next = null) {
        $this->maint = Parse::getData('Acceso.AppUsers/AppUsersMaint');
        parent::add($next);
    }

    public function edit($id = null, $next = null) {
        $this->maint = Parse::getData('Acceso.AppUsers/AppUsersMaint');
        parent::edit($id, $next);
    }

    public function index($last = false) {
        $this->search_list = Parse::getData('Acceso.AppUsers/AppUsersSL');
        parent::index($last);
    }

    public function agenda($last = false) {
        $this->search_list = Parse::getData('Acceso.AppUsers/AppUsersSLAgenda');
        parent::index($last);
    }

    public function view($id = null, $next = null) {
        $this->maint = Parse::getData('Acceso.AppUsers/AppUsersMaint');
        parent::view($id, $next);
    }

    public function datos_personales($return = null) {
        if (empty($this->maint)) {
            $this->maint = Parse::getData('Acceso.AppUsers/AppUsersDatosPersonalesMaint');
        }
        parent::datos_personales($return);
    }

    public function inasistencias($next = null) {
        $this->uses = array("Presentismo.InasistenciaNoJustificada");
        $id = AuthComponent::user('id');
        $this->row = $this->InasistenciaNoJustificada->findByUserId($id);
        if (empty($this->row)) {
            return $this->error("Usted no posee Inasistencias Pendientes de Justificación.", $next, "success");
        }
        $this->maint = Parse::getData('Acceso.AppUsers/AppUsersInasistenciasMaint');
        parent::edit($id, $next);
    }

    public function ajax_get_data($id) {
        // Chequea que el registro exista en la BD
        $this->AppUser->id = $id;
        if (!$this->AppUser->exists()) {
            return $this->error('Registro inexistente');
        }

        $array = array('AppUser.email',
            'AppUser.fullname',
            'AppUser.telefono',
            'AppUser.celular',
            'AppUser.direccion',
            'AppUser.legajo',
            'AppUser.tipo_doc',
            'AppUser.nro_doc',
            'Dependencia.id',
            'Dependencia.nombre',
            'Dependencia.direccion',
            'CentroCostos.id',
            'CentroCostos.nombre'
        );

        $data = $this->AppUser->read($array, $id);

        $this->set('data', $data);
        return $this->render('/ajax', 'ajax');
    }

    public function insertar_huella($id = null, $next = null) {
        if ($this->request->is('post') || $this->request->is('put')) {
            $requestData = $this->request->data;
            $filesData = (isset($this->request->params["form"]) ? $this->request->params["form"] : array());
            if (!empty($requestData['user_id']) && !empty($requestData['hash'])) {
                $hashToVerify = md5($requestData['user_id'] . md5(date("Ymd") . "HANDSHAKE_ENROLAMIENTO_HUELLAS"));
                if ($requestData["hash"] != $hashToVerify) {
                    $this->set('data', array("status" => "ERROR_HASH", "message" => "Hash de seguridad inválido"));
                    return $this->render('/ajax', 'ajax');
                }
                $dataToUpdate = array(
                    "AppUser" => array(
                        "id" => $requestData['user_id'],
                        "fecha_ult_registro_huellas" => date("Y-m-d H:i:s")
                    )
                );
                $this->AppUser->id = $requestData["user_id"];
                if (!$this->AppUser->save($dataToUpdate)) {
                    $this->set('data', array("status" => "ERROR_UPDATING_USER", "message" => "Erro actualizando el usuario"));
                    return $this->render('/ajax', 'ajax');
                }
                $erroresHuella = "";
                App::uses("Huella", "Acceso.Model");
                $huellaObj = new Huella();
                $huellaObj->deleteAll(array('Huella.user_id' => $requestData['user_id']), false);
                foreach ($filesData as $huellaDedo => $fileData) {
                    $dedo = substr($huellaDedo, 7);
                    $content = file_get_contents($fileData['tmp_name']);
                    $dataHuella = array(
                        "Huella" => array(
                            "user_id" => $requestData['user_id'],
                            "dedo" => $dedo,
                            "dedo_template" => $content
                        )
                    );
                    $huellaObj->create();
                    if (!$huellaObj->save($dataHuella)) {
                        $erroresHuella .= "No se pudo grabar la huella: " . $dedo . "\n";
                    }
                }
                if (!empty($erroresHuella)) {
                    $this->set('data', array("status" => "ERROR_HUELLAS", "message" => $erroresHuella));
                    return $this->render('/ajax', 'ajax');
                }
                $this->set('data', array("status" => "OK", "message" => "Enrolamiento satisfactorio"));
                return $this->render('/ajax', 'ajax');
            } else {
                throw new BadRequestException(__('Solicitud inválida'));
            }
        }
        parent::edit($id, $next);
    }

    public function ajax_get_inasistencias_no_justificadas_user($userId = null) {
        if (!isset($userId)) {
            $userId = AuthComponent::user('id');
        }
        App::uses("InasistenciaNoJustificada", "Presentismo.Model");
        $inasistenciaNoJustificadaObj = new InasistenciaNoJustificada();
        $result = $inasistenciaNoJustificadaObj->findByUserId($userId, array("id"));
        $this->set('data', $result);
        return $this->render('/ajax', 'ajax');
    }

    public function ajax_get_home_info_leida() {
        $this->set('data', array("info_leida" => !is_null(CakeSession::read('InfoLeida'))));
        return $this->render('/ajax', 'ajax');
    }

    public function ajax_set_home_info_leida() {
        CakeSession::write('InfoLeida', true);
        $this->set('data', array());
        return $this->render('/ajax', 'ajax');
    }

    public function ajax_actualizar_tablas_listado_rrhh($user_id = null, $desde = null, $hasta = null) {
        $data = [];
        if ($user_id) {
            $desde = empty($desde) ? "2013-01-01 00:00:00" : implode("-", array_reverse(explode("/", $desde)));
            $hasta = empty($hasta) ? "2099-01-01 00:00:00" : implode("-", array_reverse(explode("/", $hasta)));
            $data['asistencias'] = $this->AppUser->AsistenciaAcumulado->find("all", ['conditions' => ['AsistenciaAcumulado.user_id' => $user_id, 'AsistenciaAcumulado.fecha BETWEEN ? AND ?' => [$desde, $hasta]]]);
            $data['inasistencias'] = $this->AppUser->Inasistencia->find("all", ['conditions' => ['Inasistencia.user_id' => $user_id, 'Inasistencia.fecha BETWEEN ? AND ?' => [$desde, $hasta]]]);
            $data['licencias'] = $this->AppUser->LicenciaSolicitante->find("all", ['conditions' => ['LicenciaSolicitante.user_id' => $user_id, 'OR' => [['fecha_inicio >=' => $desde, 'fecha_inicio <=' => $hasta], ['fecha_inicio <=' => $desde, 'fecha_fin >=' => $hasta], ['fecha_inicio <=' => $desde, 'fecha_fin >=' => $desde]]]]);
        }
        $this->set('data', $data);
        return $this->render('/ajax', 'ajax');
    }

    public function import() {
        $this->maint = Parse::getData('Acceso.AppUsers/AppUsersImportarMaint');
        $this->importar = Parse::getDataImportar('Acceso.AppUsers/AppUsersImportarMaint');
        parent::importar('tmp_archivo');
    }

}
