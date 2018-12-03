<?php if (empty($result)) : ?>
	<p>Nada encontrado</p>
<?php else : ?>
<div class="home-properties">	
	<?php foreach ($result as $prop) : ?>
		<?php include(locate_template('template-part-propertylist.php',false,false)); ?>
	<?php endforeach; ?>
</div><!--/.home-properties-->
<?php endif; ?>
