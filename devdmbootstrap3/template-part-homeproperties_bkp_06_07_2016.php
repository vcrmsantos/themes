<?php
$items = array(
	'Apartamentos' => 'Apartamento',
	'Casas' => 'Casa',
	'Comerciais' => array('Apartamento', 'Casa', 'Terreno'),
);
?>

<?php foreach ($items as $label => $field) : ?>
	<?php
	$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
	
	// exceção para comerciais, busca diferente
	$leftJoin = 'LEFT JOIN em_property_fields ON (em_property_fields.property_id = em_properties.id)';
	if (is_array($field)) {
		$sql = "SELECT * FROM em_properties $leftJoin WHERE 
		categoria_divisao_descricao != :cat1 AND categoria_divisao_descricao != :cat2 
		AND categoria_divisao_descricao != :cat3 AND bairro IS NOT NULL AND status = 'Ativo' ORDER BY em_properties.id DESC LIMIT 4";
		$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$sth -> execute(array(':cat1' => $field[0], ':cat2' => $field[1], ':cat3' => $field[2]));
	} else {
		$sql = "SELECT * FROM em_properties $leftJoin WHERE categoria_divisao_descricao = :cat AND bairro IS NOT NULL AND status = 'Ativo' ORDER BY em_properties.id DESC LIMIT 4";
		$sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$sth -> execute(array(':cat' => $field));
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