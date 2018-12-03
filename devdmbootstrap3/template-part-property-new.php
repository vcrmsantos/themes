<?php
$first_photo = $result[0]['photos'][0]["arquivo"];
$property_title = utf8_encode(sprintf('%s em %s - %s - ref.: %s', $result[0]['categoria_modelo_unidade_descricao'], $result[0]['bairro'], $result[0]['localidade'], $result[0]['referencia']));
$ficha_title = utf8_encode(sprintf('%s em %s - %s <br><span class="ref">ref.: %s</span>', $result[0]['categoria_modelo_unidade_descricao'], $result[0]['bairro'], $result[0]['localidade'], $result[0]['referencia']));
$descricao = utf8_encode($result[0]['descricao']);
$bairro = utf8_encode($result[0]['bairro']);
?>

<style>
	.single-property__destaque {
		background: linear-gradient(90deg, #30353b 95%, #e12f2d 5%);
		padding-bottom: 60px;
}

.single-property__photo img {
	max-width: 100%;
	height: auto;
	border: 2px solid #ddd;
}

.single-property__main-info {
	padding: 0 20px;
}

.single-property__bairro {
	color: #fff;
	font-weight: bold;
	font-size: 35px;
	margin-bottom: 20px;
}

.single-property__desc {
	color: #fff;
	font-size: 28px;
}

.single-property__tabs .tab {
		text-align: center;
    line-height: 50px;
    float: left;
    text-transform: uppercase;
    font-weight: bold;
    color: black;
    font-size: 13px;
    width: 25%;
    vertical-align: middle;
		height: 50px;
		border-bottom: 1px solid #ddd;
		-webkit-transition: all .8s ease-in-out;
	-moz-transition: all .8s ease-in-out;
	-o-transition: all .8s ease-in-out;
	transition: all .8s ease-in-out;
}

.single-property__tabs .tab:hover {
	text-decoration: none;
}

.single-property__tabs .tab:nth-child(1) { 
	width: 35%;
}

.single-property__tabs .tab:nth-child(2) {
		border-right: 1px solid #ddd;
		border-left: 1px solid #ddd;
}

.single-property__tabs .tab--red {
	background: #e12f2d;
	color: white;
	font-size: 30px;
	width: 10%;
	border: 0;
}

.single-share {
	width: 100%;
	background: #e12f2d;
	color: white;
	display: block;
	height: 60px;
	line-height: 60px;
	font-size: 13px;
	padding-left: 25px;
	text-transform: uppercase;
	font-weight: bold;
}

.single-share i {
	margin-right: 5px;
	font-size: 20px;
	vertical-align: middle;
}

.single-property__ficha {
	background: #f5f7f6;
	padding: 50px 0;
}

.ficha__property-name {
	font-size: 25px;
	margin-bottom: 20px;
}

.ficha__property-name .ref {
	font-weight: bold;
}

.ficha__property-details > .title {
	color: #e12f2d;
	font-size: 20px;
	margin-bottom: 30px;
}

.single-property__actions {
	margin-top: 30px;
}

.btn-action {
	width: 100%;
}

.btn-action i {
	margin-right: 10px;
}

.btn-action--select {
	background: #30353b;
}

.btn-action--share {
	background: #7c878d;
}

.slider-for img {
	max-width: 100%;
	max-height: none;
	height: auto;
}

.slider-for .slick-slide {
	 height: auto; 
}	

.slider-nav .slick-slide.slick-current.slick-active {
	border: 2px solid #ddd;
}

.slick-prev:before, 
.slick-next:before {
	color: #999;
}

.single-property__gallery {
	padding: 30px 0;
}
</style>

<section class="single-property__main">
	<div class="single-property__destaque">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="single-property__photo">
						<img src="<?php echo $first_photo; ?>" alt="<?php echo $property_title; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-property__main-info">
						<div class="single-property__bairro">
							<?php echo $bairro; ?>
						</div>
						<div class="single-property__desc">
							<?php echo $descricao; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="single-property__info">
		<div class="container-fluid">
			<div class="row row-no-padding">
				<div class="col-md-6">
					<div class="single-property__tabs">
						<a href="#ficha-tecnica" class="tab">Ficha técnica</a>
						<a href="#gallery" class="tab ">Galeria</a>
						<a href="#location" class="tab">Localização</a>
						<a href="#" id="send-friend" title="indique este Imóvel para um amigo" class="tab tab--red"><i class="fa fa-comments-o"></i></a>
					</div>
				</div>
				<div class="col-md-6">
					<a class="single-share" onclick="window.open(this.href, 'fbsharer', 'width=500,height=300'); return false;" href="http://www.facebook.com/share.php?u=<?= $_SERVER["
					 HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&title=
						<?= urlencode(utf8_encode($result[0]['categoria_modelo_unidade_descricao']))?>" title="Compartilhe este imóvel no
						Faceboook"><i class="fa fa-share-alt"></i> Compartilhar</a>
				</div>
			</div>
		</div>
	</div>

</section><!--- /.single-property__main -->

<div class="container">
	<div class="row">
			<div class="col-md-6">
					<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>" id="send-friend-form">
						<input type="hidden" name="form" value="friend" />
						<div class="contact-input">
							<label for="name">Seu nome</label>
							<input type="text" class="" name="name" id="name" placeholder="Digite o seu nome" />
						</div>

						<div class="contact-input">
							<label for="namefriend">Nome amigo(a)</label>
							<input type="text" class="" name="namefriend" id="namefriend" placeholder="Quem receberá" />
						</div>

						<div class="contact-input">
							<label for="name">E-mail amigo(a)</label>
							<input type="email" name="mailFriend" class="" placeholder="Quem receberá" />
						</div>

						<input class="btn-default pull-right submit-form-default" type="submit" value="Indicar" />
						<div class="clearfix"></div>
					</form>
			</div>
	</div>
</div>

<section class="single-property__ficha" id="ficha-tecnica" >
	<div class="container">
		<div class="row">
			<h2 class="new-title">Ficha Técnica</h2>
			<div class="ficha__property-name">
				<?php echo $ficha_title; ?>
			</div>
			<div class="col-md-6">
				<div class="ficha__property-details">
					<div class="title">Detalhes da Unidade</div>
						<?php
						$propItems = array(
							'referencia' => 'Referência',
							'categoria_modelo_unidade_descricao' => 'Tipo',
							'bairro' => 'Bairro',
							'localidade' => 'Cidade',
							'dormitorios' => 'Dormitórios',
							'suites' => 'Suítes',
							'vagas' => 'Vagas',
							'area_util' => 'Área Útil',
							'area_total' => 'Área Total',
							'preco_venda' => 'Valor para venda',
							'preco_locacao' => 'Valor para locação',
						);
						?>

						<?php foreach ($propItems as $key => $value) : ?>
							<div class="details">
								<span class="detail"><?php echo $value ?>:</span>
								<span class="value">
									<?php 
										if (empty($result[0][$key])) {
											echo 0;
										} elseif ($key == 'preco_venda' || $key == 'preco_locacao') {
											echo moneyFormat($result[0][$key]);
										} else {
											echo utf8_encode($result[0][$key]);
										}
									?>
								</span>
							</div>
							<?php endforeach; ?>
					</div>
				</div>
			<div class="col-md-6">
				<div class="ficha__property-details">
					<div class="title">Descrição</div>
					<p class="property-description">
						<?php echo $descricao; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="single-property__actions">
				<div class="col-md-4">
					<a href="#" id="contact-form" title="Clique aqui para pedir mais informações sobre este imóvel" class="button-default btn-action">
						Solicitar mais informações
					</a>
				</div>

				<div class="col-md-4">
					<a target="_select" href="<?php echo get_permalink(62) . '?id=' . $result[0]['referencia'] ?>" data-property-id="<?= $result[0]['referencia'] ?>"
					title="Clique aqui para adicionar este imóvel à sua lista de imóveis favoritos" class="button-default btn-action btn-action--select">
					<i class="fa fa-heart-o"></i>Selecionar este imóvel
					</a>
				</div>

				<div class="col-md-4">
					<a class="button-default btn-action btn-action--share" onclick="window.open(this.href, 'fbsharer', 'width=500,height=300'); return false;" href="http://www.facebook.com/share.php?u=<?= $_SERVER["
					HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&title=
						<?= urlencode(utf8_encode($result[0]['categoria_modelo_unidade_descricao']))?>" title="Compartilhe este imóvel no
						Faceboook"><i class="fa fa-share-alt"></i>Compartilhar com amigo
					</a>
				</div>
		</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<form method="post" action="" id="formContactForm">
			<input type="hidden" name="form" value="contact" />
			<input type="hidden" name="code" id="code" value="<?php echo $result[0]['referencia'] ?>" />
			<input type="hidden" name="region" id="region" value="<?php echo utf8_encode($result[0]['bairro']) ?>" />
			<input type="hidden" name="type" id="type" value="<?php echo utf8_encode($result[0]['categoria_modelo_unidade_descricao']) ?>" />

			<div class="contact-input row">
				<div class="col-sm-3"><label for="name">Nome</label></div>
				<div class="col-sm-9"><input type="text" class="" name="name" id="name" placeholder="Digite o seu nome" required /></div>
				<div class="clearfix"></div>
			</div>

			<div class="contact-input row">
				<div class="col-sm-3"><label for="phone">Telefone</label></div>
				<div class="col-sm-9"><input type="text" class="" name="phone" id="phone" placeholder="(xxx) 99999.9999" required /></div>
				<div class="clearfix"></div>
			</div>

			<div class="contact-input row">
				<div class="col-sm-3"><label for="name">E-mail</label></div>
				<div class="col-sm-9"><input type="email" type="email" name="email" class="" id="email" placeholder="E-mail" required /></div>
				<div class="clearfix"></div>
			</div>
			<div class="contact-input row">
				<div class="col-sm-3"><label for="name">Mensagem</label></div>
				<div class="col-sm-9"><textarea name="message" cols="40" rows="10" class="" required></textarea></div>
				<div class="clearfix"></div>
			</div>
			<input class="btn-default pull-right submit-form-default" type="submit" value="Enviar Mensagem" />
			<div class="clearfix"></div>
		</form>
	</div>
</div>


<section class="single-property__gallery" id="gallery">
	<div class="container">
		<div class="row" id="image-gallery">
			<div class="new-title">Galeria de fotos</div>
			<div class="slider slider-for">
				<?php
				if (!empty($result[0]['photos'])) : 
					foreach ($result[0]['photos'] as $photo) :
				?>
					<div><a href="<?= $photo['arquivo'] ?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?= utf8_encode(sprintf('%s em %s - %s - ref.: %s', $result[0]['categoria_modelo_unidade_descricao'], 
				$result[0]['bairro'], $result[0]['localidade'], $result[0]['referencia'])) ?>"><img src="<?= $photo['arquivo'] ?>" alt="<?= $photo['descricao'] ?>" /></a></div>
				<?php 
					endforeach;
				endif;
				?>
			</div>
			
			<div class="slider slider-nav" id="thumbs">
				<?php
				if (!empty($result[0]['photos'])) : 
					foreach ($result[0]['photos'] as $photo) :
				?>
					<div><img src="<?= $photo['arquivo'] ?>" alt="<?= $photo['descricao'] ?>" class="img-responsive"/></div>
				<?php 
					endforeach;
				endif;
				?>
			</div>

		</div>
	</div>
</section>

<?php include (locate_template('template-part-property-new-map.php')); ?>



<?php 
if (isset($_POST['form'])) {
	if ($_POST['form'] == 'friend') { //Foi solicitado um envio de e-mail para o amigo
		$mailTo = filter_var($_POST['mailFriend'], FILTER_SANITIZE_EMAIL);
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$namefriend = filter_var($_POST['namefriend'], FILTER_SANITIZE_STRING);
		if (filter_var($mailTo, FILTER_VALIDATE_EMAIL) && !empty($mailTo)) {
			$to = $mailTo;
			$subject = 'Recomendação de Imóvel feita por ' . $name;
			$body = 'Olá ' . ucfirst($namefriend) . '! <br/><br/>';
			$propertyName = utf8_encode(sprintf('%s em %s - %s - ref.: %s', $result[0]['categoria_modelo_unidade_descricao'], 
				$result[0]['bairro'], $result[0]['localidade'], $result[0]['referencia']));
			$body .= ucfirst($name) . ' acha que você poderia se interessar pelo imóvel ' . 
			 	$propertyName . ' do site <a href="' . home_url() . '">Erwinmaack </a><br/><br/>';
			$body .= '<b>Detalhes do imóvel:</b><br/>';
			foreach ($propItems as $key => $value) {
				$body .= $value . ': ';
				if (empty($result[0][$key])) {
					$body .= '0';
				} elseif ($key == 'preco_venda' || $key == 'preco_locacao') {
					$body .= moneyFormat($result[0][$key]);
				} else {
					$body .= utf8_encode($result[0][$key]);
				}
				$body .= '<br/>';
			}
			$body .= '<br><br>Para mais detalhes do imóvel, por favor, acesse o link: <a href="http://';
			$body .= $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
			$body .= '">'. $propertyName . '</a><br/><br/>';
			$headers = array('Content-Type: text/html; charset=UTF-8', 'Bcc:erwinmaack@verocomunicacao.com.br');					
			
			if(wp_mail($to, $subject, $body, $headers )) { 
				echo '<script type="text/javascript">alert("Imóvel compartilhado com sucesso"); </script>';					
			} else {
				echo '<script type="text/javascript">alert("Ocorreu um problema ao compartilhar imóvel. Por favor, tente novamente."); </script>';	
			}
		} else {
			echo '<script type="text/javascript">alert("Verifique se todos os campos foram preenchidos corretamente."); </script>';
			
		}		
	} else if ($_POST['form'] == 'contact') {
		$mailTo = 'internet@erwinmaack.com.br';
		$code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
		$region = filter_var($_POST['region'], FILTER_SANITIZE_STRING);
		$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		
		if (!empty($message) && !empty($code) && !empty($name) && (!empty($phone) || !empty($email))) {
			$to = $mailTo;
			
			$subject = 'Solicitação de informação sobre o imóvel ' . $type . ' em ' . $region . ' - Refereência: ' . $code;
			$body = 'Estão sendo solicitadas mais informações sobre o imóvel ' . $type . ' em ' . $region . ' - Refereência: ' . $code . '!<br/><br/>';
			$body = '<b>Dados do solicitante:</b><br/>';
			$body .= 'Nome: ' . strip_tags ($name) . '<br/>';
			$body .= 'Telefone: ' . strip_tags ($phone) . '<br/>';
			$body .= 'E-mail: ' . strip_tags ($email) . '<br/>';
			$body .= 'Mensagem: ' . strip_tags ($message) . '<br/>';
			
			$body .= '<br/><b>Dados do imóvel:</b><br/>';
			$body .= 'Referência: ' . strip_tags($code) . '<br/>';
			$body .= 'Região: ' . strip_tags($region) . '<br/>';
			$body .= 'Tipo: ' . strip_tags ($type) . '<br/><br/><br/>';
			
			$headers = array('Content-Type: text/html; charset=UTF-8', 'Bcc:erwinmaack@verocomunicacao.com.br');					
					
			
			if(wp_mail($to, $subject, $body, $headers )) {
				echo '<script type="text/javascript">alert("Solicitação enviada com sucesso"); window.location.href = "http://erwinmaack.com.br/solicitacao-de-mais-informacoes/"; </script>';					
			} else {
				echo '<script type="text/javascript">alert("Ocorreu um problema ao enviar e-mail. Por favor, tente novamente."); </script>';	
			}
		} else {
			echo '<script type="text/javascript">alert("Verifique se todos os campos foram preenchidos corretamente."); </script>';
			
		}			
	}
}
?>

<script>
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("a.tab").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>