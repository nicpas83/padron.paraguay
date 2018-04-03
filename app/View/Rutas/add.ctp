<?php
$this->Html->script('https://maps.google.com/maps/api/js?key=' . AppConfig::get('site.googlemaps.key') . '&sensor=false', array('inline' => false));
$this->Html->script('presentation/rutas/mapa.js', array('inline' => false));
$this->Html->script('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js', array('inline' => false));
?>

<form action="/rutas/add" id="RutaAddForm" enctype="multipart/form-data" method="post" accept-charset="utf-8" onsubmit="plotear();
        return false;">
    <div class="row">
        <div class="col-5">
            <?php echo $this->Template->drawAllBlocks(); ?>
            <input class="btn btn-primary float-right mt10" type="submit" value="Plotear" />
            <a href="<?php echo WWW; ?>elecciones/rutas/index" id="cancelButton" class="btn btn-outline-secondary float-right mr10 mt10">Cancelar</a>
        </div>
        <div class="col-7">
            <fieldset>
                <div class="page-header">
                    <h2>Mapa</h2>
                </div>

                <div class="pull-left" id="mapa" style="width: 100%; height: 450px;"></div>
                <div class="pull-left mt15">
                    <a href="javascript:void(0);" class="btn btn-primary float-right" id="buttonGenerarRuta"><i class="fas fa fa-plus"></i> Generar Ruta</a>
                </div>
                <div id="windowConfirmarRuta"></div>
            </fieldset>
        </div>
    </div>
</form>
