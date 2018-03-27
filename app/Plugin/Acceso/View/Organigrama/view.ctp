<?php
$this->Html->script('primitives.min', array('inline' => false));
$this->Html->css('primitives.latest', array('inline' => false));
?>
<script>
    $(function () {
        $("#basicdiagram").height($("#content").height() + "px");

        var options = new primitives.orgdiagram.Config();
        var items = [
<?php foreach ($nodos as $nodo): ?>
                new primitives.orgdiagram.ItemConfig({
                    id: <?php echo $nodo["Dependencia"]["id"]; ?>,
                    parent: <?php echo isset($nodo["Dependencia"]["padre_dependencia_id"]) ? $nodo["Dependencia"]["padre_dependencia_id"] : "null"; ?>,
                    title: "<?php echo $nodo["Dependencia"]["nombre"]; ?>",
                    description: "<?php echo $nodo["Dependencia"]["nombre"]; ?>",
                    image: null,
                    isActive: <?php echo ($nodo["Dependencia"]["id"] == 2 ? "true" : "false"); ?>
                }),
<?php endforeach; ?>
        ];
                
        options.graphicsType = false;
        options.hasSelectorCheckbox = false;
        options.items = items;
        options.cursorItem = 0;
        $("#basicdiagram").orgDiagram(options);
    });
</script>

<div id="basicdiagram" style="width: 100%;"></div>

