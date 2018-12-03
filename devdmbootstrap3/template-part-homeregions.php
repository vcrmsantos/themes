<div class="home-links col-sm-12">
	<p>Sua Região num Click!</p>
	<?php 
	foreach ($regionsHome as $slug => $region) :
		if ($slug != '') :
	?>
		<div class="col-sm-3 col-xs-6 home-link">
			<a href="<?= get_site_url(null, 'imoveis?region=' . $slug); ?>" title="Clique para ver imóveis em <?= $region ?>"><?= $region ?></a>
		</div>
	<?php 
		endif;
	endforeach;
	?>
	
	<div class="clearfix"></div>
	
	<div class="col-sm-2 text-right pull-right">
		<button type="submit" class="btn-default">Ver mais regiões</button>
	</div>
</div><!--/.home-links-->
			
