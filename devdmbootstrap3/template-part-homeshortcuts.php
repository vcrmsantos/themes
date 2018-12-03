<div id="home-shortcuts">
	<div class="container">
		<div class="col-sm-12">
			
			<div class="home-small-banners">
				<div class="col-sm-3 col-xs-6">
					<a href="<?= home_url() ?>/imoveis?type%5B%5D=condominios-fechados&bt=" title="Condomínios">
						<img src="<?= get_template_directory_uri() ?>/images/site/banner-condominio.jpg" alt="Condomínios" class="img-responsive"/>
					</a>
				</div>
				
				<div class="col-sm-3 col-xs-6">
					<a href="<?= home_url() ?>/imoveis?oferta=1&bt=" title="Ofertas">
						<img src="<?= get_template_directory_uri() ?>/images/site/banner-ofertasdasemana.jpg" alt="Ofertas" class="img-responsive"/>
					</a>
				</div>
				
				<div class="col-sm-3 col-xs-6">
					<a href="<?= home_url() ?>/imoveis?especial=on&bt=" title="Exposição">
						<img src="<?= get_template_directory_uri() ?>/images/site/banner-exclusividade.jpg" alt="Exposição" class="img-responsive"/>
					</a>
				</div>
				
				<div class="col-sm-3 col-xs-6">
					<a href="<?= home_url() ?>/imoveis?buy=locacao&bt=" title="Locação">
						<img src="<?= get_template_directory_uri() ?>/images/site/banner-locacao.jpg" alt="Locação" class="img-responsive"/>
					</a>
				</div>
			</div><!--/.home-small-banners-->
			
			<div class="clearfix"></div>
			
			<?php include(locate_template('template-part-homeregions.php')); ?>
			
			<div class="clearfix"></div>
			
		</div><!--.col-md-12-->
	</div><!--/.container-->
</div><!--/#home-shortcuts-->

<div class="clearfix"></div>