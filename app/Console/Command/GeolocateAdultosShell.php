<?php

App::uses('Sanitize', 'Utility');
App::import('Vendor', 'funciones');

class GeolocateAdultosShell extends AppShell {

    public $uses = array('BaseAdultos.Adulto');
    public $limit = false;
    public $max = 50;
    public $key = "AIzaSyCqt7h8AmXvttFKpf4hCPqxFzdaEChRFcI";

    public function main() {
        $this->out("GEOLOCALIZANDO ADULTOS " . date("d/m/Y H:i"));
        $this->adultos();
        $this->out("FIN " . date("d/m/Y H:i"));
    }

    protected function adultos() {
        $adultos = $this->Adulto->find("all", [
            "limit" => $this->max,
            "conditions" => [
//                "Adulto.id" => ["57174"],
                "OR" => [
                    "AdultoUbicacion.id" => null,
                    "AdultoUbicacion.estado_geo" => "Sin geolocalizar",
                ]
            ]
        ]);

        if (empty($adultos)) {
            $this->out("NO HAY NADA PARA GEOLOCALIZAR");
            return;
        }

        foreach ($adultos as $key => $adulto) {
            if ($adulto['AdultoUbicacion']['id']) {
                $this->Adulto->AdultoUbicacion->id = $adulto['AdultoUbicacion']['id'];
                $this->Adulto->AdultoUbicacion->saveField('estado_geo', "Geolocalizando");
            } else {
                $this->Adulto->AdultoUbicacion->create();
                $this->Adulto->AdultoUbicacion->save([
                    "adulto_id" => $adulto['Adulto']['id'],
                    "estado_geo" => "Geolocalizando",
                ]);
                $ubicacion_adulto_id = $this->Adulto->AdultoUbicacion->getLastInsertID();
                $adultos[$key]['AdultoUbicacion']['id'] = $ubicacion_adulto_id;
            }
        }

        foreach ($adultos as $adulto) {
            $this->Adulto->AdultoUbicacion->id = $adulto['AdultoUbicacion']['id'];

            // Si el flag indica que se cumplio el limite los pongo uno por uno devuelta como "Sin geolocalizar"
            if ($this->limit) {
                $this->Adulto->AdultoUbicacion->saveField('estado_geo', "Sin geolocalizar");
                continue;
            }

            // Geolocalizo
            $url_google = "https://maps.googleapis.com/maps/api/geocode/json?key=" . $this->key . "&address=" . urlencode(trim($adulto['Adulto']['direccion']) . ", Ciudad Autónoma de Buenos Aires, Argentina") . "&sensor=false";
            $json = file_get_contents($url_google);
            $jdata = json_decode($json, true);

            // Si google nos dice que se cumplio el limite lo pongo devuelta como "Sin geolocalizar" y cambio el flag
            if ($jdata['status'] == "OVER_QUERY_LIMIT") {
                $this->Adulto->AdultoUbicacion->saveField('estado_geo', "Sin geolocalizar");
                $this->out("OVER_QUERY_LIMIT");
                $this->out("---------------------------------------------------------------");
                $this->limit = true;
                continue;
            }

            $array = [];
            if ($jdata['status'] == "OK" && count($jdata['results'])) {
                foreach ($jdata['results'][0]['address_components'] as $comp) {
                    if ($comp['types'][0] == 'street_number') {
                        $array['street_number'] = $comp['long_name'];
                    } elseif ($comp['types'][0] == 'route') {
                        $array['route'] = $comp['long_name'];
                    } elseif ($comp['types'][0] == 'political') {
                        $array['political'] = $comp['long_name'];
                    } elseif ($comp['types'][0] == 'locality') {
                        $array['locality'] = $comp['long_name'];
                    } elseif ($comp['types'][0] == 'administrative_area_level_2') {
                        $array['administrative_area_level_2'] = $comp['long_name'];
                    } elseif ($comp['types'][0] == 'administrative_area_level_1') {
                        $array['administrative_area_level_1'] = $comp['long_name'];
                    }
                }
                $array['location'] = $jdata['results'][0]['geometry']['location']['lat'] . "," . $jdata['results'][0]['geometry']['location']['lng'];
                $array['estado_geo'] = 'Geolocalizado';
            } else {
                $this->Adulto->AdultoUbicacion->saveField('estado_geo', "No geolocalizable");
                continue;
            }
            $this->Adulto->AdultoUbicacion->save($array);
        }
    }

}
