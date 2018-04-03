<?php
$this->Html->scriptBlock("var OP = 'V';\n var PLUGIN = '" . $plugin . "';\n var MODEL = '" . $model . "';\n var MODEL_ID = '" . $model_id . "';\n var fields = " . json_encode($fields) . ";\n", array('inline' => false));
$this->Html->script('fmw/default/maint', array('inline' => false));
$this->Html->script('fmw/default/tables', array('inline' => false));
$this->Html->script('fmw/default/ajax_upload', array('inline' => false));
$this->Html->script('fmw/default/files', array('inline' => false));
$this->Html->script('fmw/default/validation', array('inline' => false));
foreach ($cssincludes as $cssinclude) {
    $this->Html->css($cssinclude, array('inline' => false));
}
foreach ($jsincludes as $jsinclude) {
    $this->Html->script($jsinclude, array('inline' => false));
}
$this->Html->css('ruta.css', 'stylesheet', array('inline' => false, 'media' => 'print'));
$this->Html->script('rutas/maint', array('inline' => false));
$this->Html->script('rutas/view', array('inline' => false));
?>

<?php echo (!empty($title) ? "<h3 class='maint-title'>" . $title . "</h3>" : ""); ?>

<div class="row">
    <div class="col-5">
        <?php echo $this->Template->drawBlockById("datos"); ?>
    </div>
    <div class="col-7">
        <?php echo $this->Template->drawBlockById("mapa-ruta"); ?>
    </div>
    <div class="col-12">
        <?php echo $this->Template->drawBlockById("socios"); ?>
    </div>
</div>

<?php echo $this->element('files/list', array('files' => $files, 'add' => false)); ?>

<?php
echo $this->Html->link(__('Imprimir'), 'imprimir/' . $model_id, array('class' => 'btn btn-primary float-right mb20', 'target' => '_blank'));
echo $this->Html->link(__('Continuar'), $next, array('onclick' => 'return loadContent(this);', 'class' => 'btn btn-outline-secondary float-right mb20 mr15'));
?>

<?php echo $this->element('js_initial'); ?>