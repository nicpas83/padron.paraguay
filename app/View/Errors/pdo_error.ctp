<h2><?php echo __d('cake_dev', 'Error de Base de Datos'); ?></h2>

<p class="error">
    <strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
    <?php echo h($error->getMessage()); ?>
</p>

<?php if (!empty($error->queryString)) : ?>
	<p class="notice">
		<strong><?php echo __d('cake_dev', 'SQL Query'); ?>: </strong>
		<?php echo  $error->queryString; ?>
	</p>
<?php endif; ?>