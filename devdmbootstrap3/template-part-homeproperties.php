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
			 ORDER BY RAND() LIMIT 4)
			Prop ORDER BY $precoVenda ASC, $precoLocacao ASC";
			
			$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$sth -> execute(array(':cat1' => $field[0], ':cat2' => $field[1], ':cat3' => $field[2]));
		} else {
			$sql = "SELECT * FROM (SELECT $fields FROM em_properties $leftJoin WHERE 
			categoria_divisao_descricao = :cat AND bairro  IN ($bairros_in) AND status = 'Ativo'  AND $precoVenda >= 1000000  AND $precoVenda <= 18000000
			ORDER BY RAND() LIMIT 4) Prop ORDER BY $precoVenda ASC, $precoLocacao ASC";
			$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$sth -> execute(array(':cat' => $field));
		}
	} catch(Exception $e) {
    	/* echo 'Exception -> ';
		var_dump($e->getMessage());*/
		
	}

	$result = $sth -> fetchAll();
	 
	if (!empty($result)) : 
	?>
	<div class="home-properties">
		<a href="<?= home_url() ?>/imoveis?type%5B%5D=<?= ($label) != 'Comerciais' ? strtolower($label) : 'comercial' ?>&bt=" title="Veja <?= $label ?> disponíveis para venda e locação"><h2><?= $label ?></h2></a>
		<?php 		
		foreach ($result as $prop) :
		?>
			<?php include(locate_template('template-part-propertylist.php')); ?>
		<?php endforeach; ?>
	</div><!--/.home-properties-->
	<?php endif; ?>
<?php endforeach; ?>
