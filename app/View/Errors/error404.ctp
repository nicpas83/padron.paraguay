<h2><?php echo $name; ?></h2>
<p class="error">
    <strong><?php echo __d('cake', 'Error'); ?>: </strong>
    <?php
    printf(__d('cake', 'La dirección solicitada %s no fue encontrada en el servidor.'), "<strong>'{$url}'</strong>");
    ?>
</p>
