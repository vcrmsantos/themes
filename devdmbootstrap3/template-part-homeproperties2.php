<?php
$items = array(
	'Apartamentos' => 'Apartamento',
	'Casas' => 'Casa',
	'Comerciais' => array('Salas', utf8_decode('Galpão'), 'Lajes Corporativas'),
);

$precoVenda = "CAST(REPLACE(REPLACE(preco_venda, '.' ,'' ), ',', '.') AS UNSIGNED)";
$precoLocacao = "CAST(REPLACE(REPLACE(preco_locacao, '.' ,'' ), ',', '.') AS UNSIGNED)";
$bairros_home = array(
                      'ALTO DA BOA VISTA',
                      'SANTO AMARO',
                      utf8_decode('JARDIM PETRÓPOLIS'),
                      'RANJA JULIETA',
                      'VILA CRUZEIRO',
                      'INTERLAGOS',
                      utf8_decode('JARDIM PRUDÊNCIA'),
                      utf8_decode('CHÁCARA MONTE ALEGRE'),
                      utf8_decode('CHÁCARA SANTO ANTÔNIO'),
                      utf8_decode('CHÁCARA SANTO ANTÔNIO (ZONA SUL)'),
                      'BROOKLIN',
                      'BROOKLIN NOVO',
                      'BROOKLIN VELHO',
                      'CAMPO BELO',
                      'CAMPO GRANDE',
                      'ITAIM BIBI',
                      'JARDIM CORDEIRO',
                      'JARDIM MARAJOARA',
                      'MOEMA',
                      'VILA CORDEIRO'
                );
    $bairros_in = "'".implode("','", $bairros_home)."'";

?>

<?php foreach ($items as $label => $field) : ?>
	<?php
	$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
	//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$fields = 'suites, preco_venda, bairro, preco_locacao, area_util, area_total, referencia, dormitorios, vagas';
	try {
		// exceção para comerciais, busca diferente
		$leftJoin = 'LEFT JOIN em_property_fields ON (em_property_fields.property_id = em_properties.id)';
		if (is_array($field)) {
			$sql = "SELECT * FROM (SELECT $fields FROM em_properties $leftJoin WHERE 
			(categoria_divisao_descricao = :cat1 OR categoria_divisao_descricao = :cat2 
			OR categoria_divisao_descricao = :cat3) AND bairro IN ($bairros_in) AND status = 'Ativo' AND $precoVenda >= 1000000  AND $precoVenda <= 35000000
			 ORDER BY RAND() LIMIT 8)
			Prop ORDER BY $precoVenda ASC, $precoLocacao ASC";
			
			$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$sth -> execute(array(':cat1' => $field[0], ':cat2' => $field[1], ':cat3' => $field[2]));
		} else {
			$sql = "SELECT * FROM (SELECT $fields FROM em_properties $leftJoin WHERE 
			categoria_divisao_descricao = :cat AND bairro  IN ($bairros_in) AND status = 'Ativo'  AND $precoVenda >= 1000000  AND $precoVenda <= 18000000
			ORDER BY RAND() LIMIT 8) Prop ORDER BY $precoVenda ASC, $precoLocacao ASC";
			$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$sth -> execute(array(':cat' => $field));
		}
	} catch(Exception $e) {
    	/* echo 'Exception -> ';
		var_dump($e->getMessage());*/
		
	}

	$result = $sth -> fetchAll();

	$i = 0;
	$x = 0;
	 
	if (!empty($result)) : 
	?>
	<div class="home-properties <?php echo strtolower($label); ?>">
		<a href="<?= home_url() ?>/imoveis?type%5B%5D=<?= ($label) != 'Comerciais' ? strtolower($label) : 'comercial' ?>&bt=" title="Veja <?= $label ?> disponíveis para venda e locação"><h2><?= $label ?></h2></a>
		<div class="owl-imoveis owl-carousel owl-theme">
		<?php 		
		foreach ($result as $prop) :
			if ( strtolower($label) != 'comerciais' ) {
				if ( $x == 0 ) {
					$w = 'width:726.666px;';
				} else {
					$w = 'width:364px;';
				}
			}

			$string_destaque = strtolower($label) == 'apartamentos' ? 'Destaque da Semana' : 'Impossível não se apaixonar';
			$string_destaque = explode( ' ', $string_destaque );

		?>
				<div class="home-property <?php echo strtolower($label) != 'comerciais' && $x == 0 ? 'home-property--destaque' : ''; ?>" style="<?php echo $w; ?>">
					<?php if ( strtolower($label) != 'comerciais' && $x == 0 ) : ?>
						<?php echo strtolower($label) == 'apartamentos' ? '<div class="property-frase">Sonho de morar <br> na cobertura</div>' : ''; ?>
							<div class="red-text red-text--destaque">
								<div class="red-item"><span class="red-item--bold"><?php echo $string_destaque[0] .' '. $string_destaque[1]; ?></span></div><br>
								<div class="red-item red-item--bold"><?php echo $string_destaque[2] .' '. $string_destaque[3]; ?></div>
							</div>

					<?php endif; ?>
					<?php include(locate_template('template-part-propertylist2.php')); ?>
				</div>
		<?php $x++; endforeach; ?>
		</div>
	</div><!--/.home-properties-->
	<?php endif; ?>
<?php endforeach; ?>
