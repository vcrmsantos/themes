<div class="col-sm-6" id="image-gallery">
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
	<div class="property-links">
		<div class="col-sm-4">
			<a onclick="window.open(this.href, 'fbsharer', 'width=500,height=300'); return false;" href="http://www.facebook.com/share.php?u=<?= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>&title=<?= urlencode(utf8_encode($result[0]['categoria_modelo_unidade_descricao']))?>" title="Compartilhe este imóvel no Faceboook">
				<div class="col-sm-4 text-center"><i class="fa fa-facebook" ></i></div>
				<div class="col-sm-8">Compartilhar no Facebook</div>
				<div class="clearfix"></div>
			</a>
		</div>
		<div class="col-sm-4">
			<a href="<?php echo get_permalink(62) ?>" title="Acesse seus imóveis favoritos">
				<div class="col-sm-4 text-center"><i class="fa fa-home"></i></div>
				<div class="col-sm-8">Lista de imóveis selecionados</div>
				<div class="clearfix"></div>
			</a>
		</div>
		<div class="col-sm-4">
			<a href="#" id="send-friend" title="indique este Imóvel para um amigo">
				<div class="col-sm-4 text-center"><i class="fa fa-envelope"></i></div>
				<div class="col-sm-8">Indicar para um amigo</div>
				<div class="clearfix"></div>
			</a>
			
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
				
				<input class="btn-default pull-right" type="submit" value="Indicar" />
				<div class="clearfix"></div>
			</form>
		</div>
	</div>	
</div>
<div class="col-sm-6">
	<a class="back-link" title="Clique aqui para retornar à página inicial" href="<?php echo home_url() ?>">
		<i class="fa fa-chevron-left"></i> <span class="red">Voltar para Home</span>
	</a>
	
	<h2 class="property-title red">
		<?= utf8_encode(sprintf('%s em %s - %s - ref.: %s', $result[0]['categoria_modelo_unidade_descricao'], 
		$result[0]['bairro'], $result[0]['localidade'], $result[0]['referencia'])) ?>
	</h2>
	
	<p class="red strong">Detalhes da Unidade</p>
	
	<?php
		$attributes = null;
		if (!empty($result[0]['attributes'])) :
	?>
	<p class="details">
		<?php
			foreach ($result[0]['attributes'] as $attribute) :
				$attributes .= $attribute['descricao'] . ', ';
			endforeach;
			
			if (!empty($attributes)) :
				echo rtrim(utf8_encode($attributes), ', ') . '.';
			endif;
		?>
	</p>
	<?php endif; ?>
	
	<div class="col-sm-7 property-details">
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
		<div class="col-xs-6 col-sm-6"><span class="strong"><?= $value ?>:</span></div>
		<div class="col-xs-6 col-sm-6">
			<?php 
				if (empty($result[0][$key])) {
					echo 0;
				} elseif ($key == 'preco_venda' || $key == 'preco_locacao') {
					echo moneyFormat($result[0][$key]);
				} else {
					echo utf8_encode($result[0][$key]);
				}
			?>
		</div>
		<div class="clearfix"></div>
		<?php endforeach ?>		
	</div>	
	<div class="col-sm-5">
		<?php
		if (!empty($result[0]['professionals'])) : 
			foreach ($result[0]['professionals'] as $prof) :
				if (strtolower($prof['tipo']) == 'gestor de venda' || strtolower($prof['tipo']) == 'gestor de vendas') :
					//Busco o post que tem o código do corretor.
					$args = array(
					  'post_type'   => 'post',
					  'post_status' => 'publish',
					  'numberposts' => 1,
					  'meta_key' => 'code',
					  'meta_value' => $prof['codigo'],
					);
					$post = get_posts($args);
					if ($post) :
						echo get_the_post_thumbnail($post[0], array(189, 189), array('class' => 'img-responsive'));
		?>
						<p class="text-center">
							<!--<span class="red strong"><?= utf8_encode($prof['tipo']) ?></span> <br />-->
							<?= get_the_title($post[0]->ID)  ?> <br />					
							<?php if(get_field('creci', $post[0]->ID)) : ?>
			            		CRECI: <?php the_field('creci', $post[0]->ID); ?><br />	            	
							<?php endif; ?>	                                
			                
			                <?php if(get_field('email', $post[0]->ID)) : ?>
			            		<a href="mailto:<?php the_field('email', $post[0]->ID); ?>"><?php the_field('email', $post[0]->ID); ?></a><br />
							<?php endif; ?> 					
							<span class="strong"><?php the_field('phone', $post[0]->ID); ?></span><br />				
						</p>
					<?php else: //Caso o post para o corretor não exista, apenas exibo as informações que estão disponíveis na API ?>
						<img src="<?= get_template_directory_uri() ?>/images/corretor.png" alt="Corretor Responsável" class="img-responsive"/>
						<p class="text-center">
							<!--<span class="red strong"><?= utf8_encode($prof['tipo']); ?></span> <br />-->
							<?= utf8_encode($prof['apelido']) ?> <br />
							Código: #<?= $prof['codigo'] ?> <br />
						</p>
					<?php endif; ?>		
		<?php
				endif;
			endforeach;
		endif;
		?>
	</div>
	
	<div class="clearfix"></div><br>
	<p class="red strong">Descrição</p>
	<p><?= utf8_encode($result[0]['descricao']) ?></p>
	<div class="col-sm-6 no-padding">
		<a target="_select" href="<?php echo get_permalink(62) . '?id=' . $result[0]['referencia'] ?>" data-property-id="<?= $result[0]['referencia'] ?>" title="Clique aqui para adicionar este imóvel à sua lista de imóveis favoritos" class="btn-gray">
			Selecionar este imóvel
		</a>
	</div>
	<div class="col-sm-6 no-padding text-right">
		<a href="#" id="contact-form" title="Clique aqui para pedir mais informações sobre este imóvel" class="btn-default">
			Solicitar mais informações
		</a>
	</div>
	<div class="clearfix"></div>
	
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
			<div class="col-sm-9"><input type="text" class="" name="phone" id="phone" placeholder="(xxx) 99999.9999" required/></div>
			<div class="clearfix"></div>
		</div>
		
		<div class="contact-input row">
			<div class="col-sm-3"><label for="name">E-mail</label></div>
			<div class="col-sm-9"><input type="email" type="email" name="email" class="" id="email" placeholder="E-mail" required/></div>
			<div class="clearfix"></div>
		</div>
		<div class="contact-input row">
			<div class="col-sm-3"><label for="name">Mensagem</label></div>
			<div class="col-sm-9"><textarea name="message" cols="40" rows="10" class="" required></textarea></div>
			<div class="clearfix"></div>
		</div>		
		<input class="btn-default pull-right" type="submit" value="Enviar Mensagem" />
		<div class="clearfix"></div>
	</form>
</div>
<div class="clearfix"></div>


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
			$headers = array('Content-Type: text/html; charset=UTF-8', 'Bcc:  erwinmaack@verocomunicacao.com.br', 'Bcc:  rafael@blackhauz.com.br');			
			
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
			
			$headers = array('Content-Type: text/html; charset=UTF-8', 'Bcc:  erwinmaack@verocomunicacao.com.br', 'Bcc:  rafael@blackhauz.com.br');					
			
			if(wp_mail($to, $subject, $body, $headers )) {
				echo '<script type="text/javascript">alert("Imóvel compartilhado com sucesso"); </script>';					
			} else {
				echo '<script type="text/javascript">alert("Ocorreu um problema ao compartilhar imóvel. Por favor, tente novamente."); </script>';	
			}
		} else {
			echo '<script type="text/javascript">alert("Verifique se todos os campos foram preenchidos corretamente."); </script>';
			
		}			
	}
}