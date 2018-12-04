<?php if (empty($result)) : ?>
	<p>Nada encontrado</p>
<?php else : ?>
<div class="home-properties">	
    <?php foreach ($result as $prop) : ?>
        <div class="home-property col-md-4">
            <?php include(locate_template('template-part-propertylist2.php',false,false)); ?>
        </div>
	<?php endforeach; ?>
</div><!--/.home-properties-->
<?php endif; ?>
