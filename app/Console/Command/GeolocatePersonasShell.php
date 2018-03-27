<?php

App::uses('Sanitize', 'Utility');
App::import('Vendor', 'funciones');

class GeolocatePersonasShell extends AppShell {

    public $uses = array('Elecciones.Persona');
    public $limit = false;
    public $max = 100;
    public $key = "AIzaSyCqt7h8AmXvttFKpf4hCPqxFzdaEChRFcI";

    public function main() {
        $this->out("GEOLOCALIZANDO ADULTOS " . date("d/m/Y H:i"));
        $this->personas();
        $this->out("FIN " . date("d/m/Y H:i"));
    }

    protected function personas() {

        $personas = $this->Persona->find("all", [
            "limit" => $this->max,
            "conditions" => [
                "OR" => [
                    "PersonaUbicacion.id" => null,
                    "PersonaUbicacion.estado_geo" => "Sin geolocalizar",
                ]
            ]
        ]);

        if (empty($personas)) {
            $this->out("NO HAY NADA PARA GEOLOCALIZAR");
            return;
        }

        foreach ($personas as $key => $persona) {
            if ($persona['PersonaUbicacion']['id']) {
                $this->Persona->PersonaUbicacion->id = $persona['PersonaUbicacion']['id'];
                $this->Persona->PersonaUbicacion->saveField('estado_geo', "Geolocalizando");
            } else {
                $this->Persona->PersonaUbicacion->create();
                $this->Persona->PersonaUbicacion->save([
                    "persona_id" => $persona['Persona']['id'],
                    "estado_geo" => "Geolocalizando",
                ]);
                $ubicacion_persona_id = $this->Persona->PersonaUbicacion->getLastInsertID();
                $personas[$key]['PersonaUbicacion']['id'] = $ubicacion_persona_id;
            }
        }

        foreach ($personas as $persona) {
            $this->Persona->PersonaUbicacion->id = $persona['PersonaUbicacion']['id'];

            // Si el flag indica que se cumplio el limite los pongo uno por uno devuelta como "Sin geolocalizar"
            if ($this->limit) {
                $this->Persona->PersonaUbicacion->saveField('estado_geo', "Sin geolocalizar");
                continue;
            }
          
            // Geolocalizo
            $url_google = "https://maps.googleapis.com/maps/api/geocode/json?key=" . $this->key . "&address=" . urlencode(trim($persona['Persona']['domicilio']) . $persona['Persona']['zona_civica'] . ", Argentina") . "&sensor=false";
            $json = file_get_contents($url_google);
            $jdata = json_decode($json, true);
            if ($jdata['status'] == "OVER_QUERY_LIMIT") {
                $this->Persona->PersonaUbicacion->saveField('estado_geo', "Sin geolocalizar");
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
                $this->Persona->PersonaUbicacion->saveField('estado_geo', "No geolocalizable");
                continue;
            }
            $this->Persona->PersonaUbicacion->save($array);
        }
    }

}
