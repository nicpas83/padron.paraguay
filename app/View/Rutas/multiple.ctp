<?php
$this->Html->scriptBlock("var OP = 'V';\n var PLUGIN = '" . $plugin . "';\n var MODEL = '" . $model . "';\n var MODEL_ID = '" . $model_id . "';\n", array('inline' => false));
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
$this->Html->scriptBlock("var rutas = [" . implode(",", array_keys($registros)) . "];\n", array('inline' => false));
$this->Html->script('rutas/multiple', array('inline' => false));
?>

<?php foreach ($registros as $id => $registro): ?>
    <?php foreach ($registro['data'] as $order => $block): ?>
        <?php if ($block['type'] == 'fieldset'): ?>
            <?php echo $this->element('fieldsets/view', array('block' => $block, 'order' => $order, 'add' => true, 'row' => $registro['row'], 'translatepath' => null)); ?>
        <?php elseif ($block['type'] == 'table'): ?>
            <?php echo $this->element('tables/list', array('OP' => 'V', 'table' => $block, 'order' => $order, 'add' => false)); ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="pageBreak">
        <br />
    </div>
<?php endforeach; ?>

<?php
echo $this->Html->link(__('Imprimir'), 'imprimir/' . $model_id, array('class' => 'btn btn-primary pull-right mt10', 'target' => '_blank'));
echo $this->Html->link(__('Continuar'), $next, array('onclick' => 'return loadContent(this);', 'class' => 'btn btn-default pull-right mt10 mr10'));
?>

<?php echo $this->element('js_initial'); ?>