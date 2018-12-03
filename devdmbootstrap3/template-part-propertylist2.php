<?php  
$exclusividade = $prop['exclusividade'];
$cor = 'vermelho';
$selo_image_url = get_template_directory_uri() . '/images/selo-exclusividade-lopes-erwin-maack-'.$cor.'.png';
$locacao = (isset($_GET['buy']) && $_GET['buy'] == 'locacao') ? 1 :0;
$propUrl = getPropertyUrl($prop); $sql = 'SELECT arquivo, descricao FROM em_photos WHERE property_id = :id ORDER BY principal ASC LIMIT 1'; $sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY)); $sth -> execute(array(':id' => $prop['referencia'])); $photos = $sth -> fetchAll(); ?>

	 <a href="<?php echo  $propUrl ?>" class="home-property-image home-property-featured">


	 

	
	 	<div class="tags text-right">
 			<?php echo $prop['preco_venda'] != '0,00' ? '<span class="cell">Venda</span>' : ''; echo $prop['preco_locacao'] != '0,00' ? '<span class="rent">Locação</span>' : ''; ?>
		 </div>
		 	
 		<img class="property-image" src="<?php echo  $photos[0]['arquivo']; ?>" alt="<?php echo  $photos[0]['descricao']; ?>"/>

		<?php if (strcasecmp($exclusividade, "true") == 0) { ?>
			<img class="selo-exclusividade" src="<?php echo $selo_image_url; ?>" alt="Selo de Exclusividade">
		<?php } //endif ?>
 	</a>
	 
	<div class="property-info">
		<p class="home-property-title strong">
			<?php  $propName = utf8_encode($prop['bairro']); if (strlen($propName) > 23) { echo substr($propName, 0, 23) . '...'; } else { echo $propName; } ?>&nbsp;
		</p>
		<p class="home-property-desc">
			<?php echo  (int)$prop['dormitorios']; ?> dorms | <?php echo  (int)$prop['suites']; ?> sts 
			| <?php echo  (int)$prop['vagas']; ?> vgs | <?php echo  number_format((float)str_replace(',', '.', $prop['area_util']), 0, ',', '.'); ?>m²
		</p>
		<div class="property-action">
		<?php if (isset($selected_property)) : ?>
			<div id="top-search">
				<div class="container">
					<div class="col-sm-12">					
						<form method="post" action="" class="top-search-form">
							<div class="col-sm-12" title="Remover">
								<input type="hidden" name="id" value="<?php echo  $prop['referencia'] ?>" />
								<input type="checkbox" class="sr-only"/>
								<div class="checkbox-big checkbox-big2 checked"></div>
								
								<span>Remover imóvel</span>
								
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div>
			</div> 	
		<?php  else : $selected = null; $message = 'Selecionar'; $action = 'incluir'; if (isset($_SESSION['properties'][$prop['referencia']])) : $selected = 'selected'; $message = 'Remover'; $action = 'remover'; endif; ?>
			<div class="property-icon">
				<a target="_select" href="<?php echo get_permalink(62) . '?id=' . $prop['referencia'] ?>" data-property-id="<?php echo  $prop['referencia'] ?>" title="Clique aqui para incluir este imóvel na lista de imóveis favoritos" class="property-icon fa fa-heart-o"></a>
			</div>
		<?php endif; ?>
			<div class="property-icon">
				<a target="_share" href="<?php echo get_permalink(62) . '?id=' . $prop['referencia'] ?>" data-property-id="<?php echo  $prop['referencia'] ?>" title="Clique aqui para compartilhar este imóvel" class="property-icon property-icon--share fa fa-share-alt"></a>
			</div>
		</div>
	 </div>
 	<a href="<?php echo  $propUrl ?>" title="Clique e veja mais detalhes" class="btn-default btn-property<?php echo ( (isset($_GET['buy']) && $_GET['buy'] == 'locacao') || $prop['preco_venda'] == '0,00') ? ' btn-rent' : '' ?>">
		 <span class="property-price">
		 <?php $price = ($locacao || $prop['preco_venda'] == '0,00') ? moneyFormat($prop['preco_locacao']) : moneyFormat( $prop['preco_venda']);
			 $price_div = explode(",", $price);
			 printf('%s,<span style="font-size:15px;vertical-align:text-top;">%s</span>', $price_div[0], $price_div[1]);
		 ?>
		</span>
 	</a>


