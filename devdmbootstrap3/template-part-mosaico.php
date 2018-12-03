<?php $image_mosaico = get_template_directory_uri() . '/images/mosaico/'; ?>
<style>
.mosaico-item {
	position: relative;
}
.red-text {
	color: white;
	position: absolute;
	bottom: 20%;
}
.red-text--top {
	bottom: 70%;
}

.red-text--bottom {
	bottom: 5px;
    left: 4px;
    z-index: 1;
}

.red-text--bottom-full {
	bottom: 0;
}

.home-mosaico {
	position: relative;
}
.red-item {
	background: #e53d30;
	padding: 5px 20px;
	display: inline-block;
	text-transform: uppercase;
	font-size: 18px;
}

.red-item--bold {
	font-weight: bold;
}

.red-item--opc a {
	opacity: 0.5;
	font-weight: bold;
	color: white;
}

.red-item--opc a:hover {
	text-decoration: none;
}

.row-mosaico {
	position: relative;
}

</style>
<section class="home-mosaico">
	<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="mosaico-item">
						<a href="<?= home_url() ?>/imoveis?type%5B%5D=condominios-fechados&bt=" title="Condomínios">
							<img style="height:464px" src="<?= $image_mosaico ?>mosaico1.png" alt="Condomínios" class="img-responsive"/>
						</a>
						<div class="red-text">
							<div class="red-item">Conheça os nossos
								<div class="red-item--bold">Imóveis para locação</div>
							</div>
							<div class="red-item red-item--opc"><a href="<?= home_url() ?>/imoveis?type%5B%5D=condominios-fechados&bt=" title="Condomínios">Saiba mais</a></div>
						</div>
					</div>
				</div>
				
					<div class="col-md-9">
						<div class="mosaico-item">
							<a href="<?= home_url() ?>/imoveis?oferta=1&bt=" title="Ofertas">
								<img style="height:464px;width:100%" src="<?= $image_mosaico ?>mosaico2.png" alt="Ofertas" class="img-responsive"/>
							</a>
								<div class="red-text red-text--top">
									<div class="red-item">Exclusividade e
										<div class="red-item--bold">Imóveis em exposição</div>
									</div><br />
									<div class="red-item red-item--opc"><a href="<?= home_url() ?>/imoveis?oferta=1&bt=" title="Ofertas">Acesse</a></div>
								</div>
						</div>
					</div>
			</div><!-- /.row -->
			<div class="row row-mosaico">				
				<div class="col-md-3">
					<div class="mosaico-item">
						<a href="<?= home_url() ?>/imoveis?especial=on&bt=" title="Exposição">
							<img style="width:100%" src="<?= $image_mosaico ?>mosaico3.png" alt="Exposição" class="img-responsive"/>
						</a>
					</div>
				</div>
				<div class="red-text red-text--bottom">
									<div class="red-item">Os Melhores
										<span class="red-item--bold">Condomínios da zona azul</span>
									</div><br />
									<div class="red-item red-item--opc"><a href="<?= home_url() ?>/imoveis?especial=on&bt=" title="Exposição">Conheça aqui</a></div>
						</div>
				<div class="col-md-3">
					<a href="<?= home_url() ?>/imoveis?especial=on&bt=" title="Exposição">
						<img style="width:100%" src="<?= $image_mosaico ?>mosaico4.png" alt="Exposição" class="img-responsive"/>
					</a>
				</div>
				<div class="col-md-6">
					<div class="mosaico-item">
					<a href="<?= home_url() ?>/imoveis?buy=locacao&bt=" title="Locação">
						<img style="width:100%;height:187px" src="<?= $image_mosaico ?>mosaico5.png" alt="Locação" class="img-responsive"/>
					</a>
					<div class="red-text red-text--bottom-full">
									<div class="red-item">Ofertas
										<span class="red-item--bold">da semana</span>
									</div><br />
									<div class="red-item red-item--opc"><a href="<?= home_url() ?>/imoveis?buy=locacao&bt=" title="Locação">Confira</a></div>
								</div>
					</div>
				</div>
			</div> <!-- /.row -->
	</div><!--/.container-->
</section><!--/.home-mosaico-->


<style>
.home-mosaico {
	padding: 20px;
}

.home-mosaico .row > [class*="col-"] {
	padding: 5px;
}

</style>