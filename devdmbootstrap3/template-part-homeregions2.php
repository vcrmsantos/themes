<style>
.btn-rounded {
	background: #e12f2d !important;
    color: white !important;
    padding: 8px;
    font-size: 16px;
    cursor: pointer;
	border-radius: 10px;
	font-weight: bold;
}

.btn-rounded:active,
.btn-rounded:hover {
    background: #e12f2d !important;
    color: white !important;
	opacity: 0.8;
}

.btn-rounded:focus {
	outline: 0;
}

.home-links .btn-rounded:after {
    content: '+';
    padding: 0 5px;
    font-size: 20px;
}

.home-links .btn-rounded.active:after {
	content: '-';
}

.home-link {
	margin-bottom: 10px;
}

.home-links a {
	font-size: 15px;
}

.home-links a,
.home-links a:hover {
	border:0;
	padding: 5px 0;
}

.home-links a:hover {
	font-weight: bold;
}

.underline:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  right: 0;
  margin-left: auto;
	margin-right: auto;
  background: #e12f2d;
  visibility: hidden;
  border-radius: 5px;
  transform: scaleX(0);
  transition: .25s linear;

}
.underline:hover:before,
.underline:focus:before {
  visibility: visible;
  transform: scaleX(1);
}

.home-links .underline:before {
	width: 80%;
}


</style>

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