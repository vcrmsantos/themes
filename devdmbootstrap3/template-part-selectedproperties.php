<div class="home-properties">
	<h2>Casas</h2>
	<?php for ($i = 1; $i <= 3; $i++) : ?>
	<div class="col-sm-3 home-property">
     	<a href="#" class="home-property-image">
     		<img src="<?php bloginfo('template_url'); ?>/images/imagem-casa01.jpg" alt="whatever"/>
     	</a>     	
     	<p class="home-property-title">Casa X</p>
     	<p class="home-property-desc">3 dorms | 1 sts | 2 vgs | 94m²</p>     	
     	<a href="<?php echo home_url() ?>/property.php" title="Clique e veja mais detalhes" class="btn-default btn-property">R$ 2.750.000,00</a>
     	<div id="top-search">
     		<div class="container">
				<div class="col-sm-12">			
					<form method="post" action="" class="top-search-form">
						<div class="col-sm-12">
							<input type="checkbox" class="sr-only"/>
							<div class="checkbox-big checkbox-big2 checked"></div>
							
							<span>Imóvel selecionado</span>
							
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php endfor; ?>
</div><!--/.home-properties-->

<div class="clearfix"></div>