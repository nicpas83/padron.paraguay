<?php
$this->Html->script("https://maps.googleapis.com/maps/api/js?key=" . AppConfig::get('site.googlemaps.key'), array('inline' => false));
$this->Html->script('personas/mapa_personas', array('inline' => false));
?>
<div class="row mt15">
    <div class="col-12">
        <div id="mapaPersonas" style="width: 100%; height: 600px;"></div>
    </div>
</div>
