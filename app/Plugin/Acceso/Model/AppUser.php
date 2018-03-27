<?php

App::uses('User', 'FmwAcceso.Model');

class AppUser extends User {

    public $label = 'Agentes';
    public $plugin = 'Acceso';
    private $situacion_revista_before_save;

//    public function __construct() {
//        $this->belongsTo = array_merge($this->belongsTo, array(
//            'Presentismo.GrupoEmpleados',
//            'Dependencia' => array(
//                'className' => 'Acceso.Dependencia',
//                'foreignKey' => 'dependencia_id',
//            ),
//            'CentroCostos' => array(
//                'className' => 'Acceso.CentroCostos',
//                'foreignKey' => false,
//                'conditions' => array('CentroCostos.id = Dependencia.centro_costos_id'),
//            ),
//            'Area' => array(
//                'className' => 'Soporte.Area',
//                'foreignKey' => false,
//                'conditions' => array('Area.id = Dependencia.area_id'),
//            ),
//            'Profesion' => array(
//                'className' => 'Acceso.Profesion',
//                'foreignKey' => 'profesion_id',
//            ),
//        ));
//        $this->hasMany = array_merge($this->hasMany, array(
//            'Presentismo.Asistencia',
//            'AsistenciaSubordinado' => array(
//                'className' => 'Presentismo.AsistenciaSubordinado',
//                'foreignKey' => 'user_id',
//            ),
//            'AsistenciaAcumulado' => array(
//                'className' => 'Presentismo.AsistenciaAcumulado',
//                'foreignKey' => 'user_id',
//            ),
//            'LicenciaSolicitante' => array(
//                'className' => 'Licencias.LicenciaSolicitante',
//                'foreignKey' => 'user_id',
//            ),
//            'Presentismo.Inasistencia',
//            'InasistenciaNoJustificada' => array(
//                'className' => 'Presentismo.InasistenciaNoJustificada',
//                'foreignKey' => 'user_id',
//            ),
//            'UserSituacionRevista' => array(
//                'className' => 'Acceso.UserSituacionRevista',
//                'foreignKey' => 'agente_id',
//            ),
//        ));
//        unset($this->hasAndBelongsToMany['Rol']);
//        $this->hasAndBelongsToMany = array_merge($this->hasAndBelongsToMany, array(
//            'AppRol' => array(
//                'className' => 'Acceso.AppRol',
//                'joinTable' => 'acc_users_rols',
//                'foreignKey' => 'user_id',
//                'associationForeignKey' => 'rol_id',
//                'unique' => true,
//            ),
//            'AreaResponsable' => array(
//                'className' => 'Provision.AreaResponsable',
//                'joinTable' => 'pro_areas_responsables_users',
//                'foreignKey' => 'user_id',
//                'associationForeignKey' => 'area_responsable_id',
//                'unique' => true,
//            ),
//        ));
//        $this->validate = array_merge($this->validate, array(
//            'centro_costos_id' => array(
//                'required' => array(
//                    'rule' => array('notBlank'),
//                    'message' => 'El Centro de Costos del usuario es requerido'
//                )
//            ),
//            'dependencia_id' => array(
//                'required' => array(
//                    'rule' => array('notBlank'),
//                    'message' => 'La Dependencia del usuario es requerida'
//                )
//            ),
//            'grupo_empleados_id' => array(
//                'required' => array(
//                    'rule' => array('notBlank'),
//                    'message' => 'El Grupo de Empleados del usuario es requerido'
//                )
//            ),
//        ));
//        parent::__construct();
//    }
//
//    public function beforeImport(&$records, $skipFirstRow, AppShell $appShell = null) {
//        foreach ($records as $key => $value) {
//            // SEPARO NOMBRE Y APELLIDO
//            if (!empty($value['AppUser']['tmp_nombre_apellido'])) {
//                if (strstr($value['AppUser']['tmp_nombre_apellido'], ",") !== false) {
//                    list($apellido, $nombre) = explode(",", $value['AppUser']['tmp_nombre_apellido']);
//                    $records[$key]['AppUser']['firstname'] = trim($nombre);
//                    $records[$key]['AppUser']['lastname'] = trim($apellido);
//                } else {
//                    $records[$key]['AppUser']['firstname'] = ".";
//                    $records[$key]['AppUser']['lastname'] = trim($value['AppUser']['tmp_nombre_apellido']);
//                }
//            }
//            // FIX NUMERO DOCUMENTO
//            if (!empty($value['AppUser']['nro_doc'])) {
//                $records[$key]['AppUser']['tipo_doc'] = "CUIT";
//                $records[$key]['AppUser']['nro_doc'] = str_replace([" ", "-"], ["", ""], $value['AppUser']['nro_doc']);
//            }
//            // FIX FECHAS
//            if (!empty($value['AppUser']['fecha_ingreso'])) {
//                $records[$key]['AppUser']['fecha_ingreso'] = gmdate("Y-m-d", ($value['AppUser']['fecha_ingreso'] - 25569) * 86400);
//            }
//            if (!empty($value['AppUser']['tmp_contrato_fecha_desde'])) {
//                $records[$key]['AppUser']['tmp_contrato_fecha_desde'] = gmdate("Y-m-d", ($value['AppUser']['tmp_contrato_fecha_desde'] - 25569) * 86400);
//            }
//            if (!empty($value['AppUser']['tmp_contrato_fecha_hasta'])) {
//                $records[$key]['AppUser']['tmp_contrato_fecha_hasta'] = gmdate("Y-m-d", ($value['AppUser']['tmp_contrato_fecha_hasta'] - 25569) * 86400);
//            }
//            if (!empty($value['AppUser']['fecha_nacimiento'])) {
//                $records[$key]['AppUser']['fecha_nacimiento'] = gmdate("Y-m-d", ($value['AppUser']['fecha_nacimiento'] - 25569) * 86400);
//            }
//            // FIX DEPENDENCIA
//            $dependencia = $this->Dependencia->findByNombre(fixNombreDependenciaImportacion($value['AppUser']['tmp_centro_costos'], isset($value['AppUser']['tmp_dependencia']) ? $value['AppUser']['tmp_dependencia'] : ""));
//            if (isset($dependencia['Dependencia']['id'])) {
//                $records[$key]['AppUser']['dependencia_id'] = $dependencia['Dependencia']['id'];
//                $records[$key]['AppUser']['centro_costos_id'] = $dependencia['CentroCostos']['id'];
//            }
//            // FIX EMAIL
//            if (isset($value['AppUser']['email'])) {
//                $partesEmails = explode(";", $value['AppUser']['email']);
//                if (count($partesEmails) > 1) {
//                    $records[$key]['AppUser']['email'] = trim($partesEmails[0]);
//                }
//                $partesEmails2 = explode("/", $value['AppUser']['email']);
//                if (count($partesEmails2) > 1) {
//                    $records[$key]['AppUser']['email'] = trim($partesEmails2[0]);
//                }
//            }
//
//            $letters = 1;
//            $userExists = true;
//            while ($userExists) {
//                $username = strtolower(substr($records[$key]['AppUser']['firstname'], 0, $letters) . $records[$key]['AppUser']['lastname']);
//                $userExists = count($this->findByUsername($username));
//                $letters++;
//            }
//            //$records[$key]['AppUser']['username'] = $username;
//            $records[$key]['Contrato'] = [
//                [
//                    "forma_ingreso" => isset($value['AppUser']['tmp_forma_ingreso']) ? $value['AppUser']['tmp_forma_ingreso'] : "",
//                    //"contratacion_tipo" => $value['AppUser'][''],
//                    "fecha_desde" => isset($records[$key]['AppUser']['tmp_contrato_fecha_desde']) ? $records[$key]['AppUser']['tmp_contrato_fecha_desde'] : "",
//                    "fecha_hasta" => isset($records[$key]['AppUser']['tmp_contrato_fecha_hasta']) ? $records[$key]['AppUser']['tmp_contrato_fecha_hasta'] : "",
//                    "cuotas" => $value['AppUser']['tmp_contrato_cuotas'],
//                    "expediente_loys" => isset($value['AppUser']['tmp_contrato_expediente']) ? $value['AppUser']['tmp_contrato_expediente'] : "",
//                    "resolucion" => isset($value['AppUser']['tmp_contrato_resolucion']) ? $value['AppUser']['tmp_contrato_resolucion'] : "",
//                    "monto_original" => $value['AppUser']['tmp_contrato_monto_original'],
//                    "reemplazo_de" => isset($value['AppUser']['tmp_contrato_reemplazo_de']) ? $value['AppUser']['tmp_contrato_reemplazo_de'] : null,
//                ]
//            ];
//        }
//    }
//
//    public function beforeSave($options = array()) {
//        //$this->situacion_revista_before_save = $this->field("revista");
//        $this->data["AppUser"]["username"] = $this->data["AppUser"]["email"];
//        return parent::beforeSave($options);
//    }
//
//    public function afterSave($created, $options = array()) {
//        $this->saveHistorialSituacionRevista($created);
//        return parent::afterSave($created, $options);
//    }
//
//    private function saveHistorialSituacionRevista($created) {
//        if ($created) {
//            return; // si es un op=A no grabo el historial ya que no hubo cambio
//        }
//        if (isset($this->data["AppUser"]["revista"]) && $this->data["AppUser"]["revista"] != $this->situacion_revista_before_save) {
//            $this->UserSituacionRevista->create();
//            $this->UserSituacionRevista->save(array(
//                "fecha_carga" => date("Y-m-d H:i:s"),
//                "user_id" => AuthComponent::user("user_id"),
//                "agente_id" => $this->id,
//                "situacion_revista_anterior" => $this->situacion_revista_before_save,
//                "situacion_revista" => $this->data["AppUser"]["revista"],
//            ));
//        }
//    }
//
//    public function enviarEmail($asunto, $cuerpoVariables, $vista = 'default', $layout = 'default') {
//        $pk = $this->primaryKey;
//        if (empty($this->$pk)) {
//            return;
//        }
//
//        $user = $this->read();
//        if (empty($user[$this->name]['email'])) {
//            return;
//        }
//
//        if (gettype($cuerpoVariables) == "string") {
//            $cuerpoVariables = array("content" => $cuerpoVariables);
//        }
//
//        App::uses('Mensaje', 'FmwMessaging.Model');
//        $msj = new Mensaje();
//        $msj->send(array(
//            "destino" => $user[$this->name]['fullname'] . ' <' . $user[$this->name]['email'] . '>',
//            "asunto" => $asunto,
//            "variables" => $cuerpoVariables,
//            "vista" => $vista,
//            "layout" => $layout,
//        ));
//    }

}
