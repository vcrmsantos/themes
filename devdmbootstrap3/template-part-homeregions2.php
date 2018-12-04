<div class="container">
	<div class="row">
		<div class="home-links col-sm-12">
			<div class="new-title">Sua Região num Click!</div>
			<?php 
			foreach ($regionsHome as $slug => $region) :
				if ($slug != '') :
			?>
				<div class="col-sm-3 col-xs-6 home-link text-center">
					<a class="underline" href="<?= get_site_url(null, 'imoveis?region=' . $slug); ?>" title="Clique para ver imóveis em <?= $region ?>"><?= $region ?></a>
				</div>
			<?php 
				endif;
			endforeach;
			?>
			
			<div class="clearfix"></div>
			
			<div class="col-sm-2 text-right pull-right">
				<button class="btn-default button-default btn-rounded">Ver mais regiões</button>
			</div>
		</div><!--/.home-links-->
	</div>
</div>



			
<script>
		jQuery('.home-links .btn-default').click(function(){
			jQuery(this).toggleClass('active');	
		});
</script>