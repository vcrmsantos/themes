<?php $conditionsPrice = '';
 $minPrice = '0';
 $maxPrice = '0';
 $price = 0;
 $precoVenda = "CAST(REPLACE(REPLACE(preco_venda, '.' ,'' ), ',', '.') AS UNSIGNED)";
 $precoLocacao = "CAST(REPLACE(REPLACE(preco_locacao, '.' ,'' ), ',', '.') AS UNSIGNED)";
 $conditionsPrice = '';
 if ($result[0]['preco_venda'] != '0,00') { $minPrice = (float)str_replace(',', '.', $result[0]['preco_venda']) - ((float)str_replace(',', '.', $result[0]['preco_venda'])*0.2);
 $maxPrice = (float)str_replace(',', '.', $result[0]['preco_venda']) + ((float)str_replace(',', '.', $result[0]['preco_venda'])*0.2);
 $conditionsPrice = ' AND preco_venda BETWEEN (:minPrice AND :maxPrice)';
 } else if($result[0]['preco_locacao'] != '0,00') { $minPrice = (float)str_replace(',', '.', $result[0]['preco_locacao']) - ((float)str_replace(',', '.', $result[0]['preco_locacao'])*0.1);
 $maxPrice = (float)str_replace(',', '.', $result[0]['preco_locacao']) + ((float)str_replace(',', '.', $result[0]['preco_locacao'])*0.1);
 $conditionsPrice = ' AND preco_locacao BETWEEN (:minPrice AND :maxPrice)';
 } $dbh = new PDO('mysql:host=' . DB_HOST . ';
dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
 $sql = "SELECT * FROM
(SELECT * FROM em_properties 
	WHERE categoria_modelo_unidade_descricao = :categoria 
		AND id != :id 
		AND categoria_divisao_descricao = :tipo 
		AND bairro = :region $conditionsPrice AND status = 'Ativo' ORDER BY RAND() LIMIT 3) Prop ORDER BY $precoVenda DESC, $precoLocacao DESC";
 $sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
 $sth->bindValue(':id', (int)$id, PDO::PARAM_INT);
 $sth->bindValue(':categoria', $result[0]['categoria_modelo_unidade_descricao']);
 $sth->bindValue(':tipo', $result[0]['categoria_divisao_descricao']);
 $sth->bindValue(':region', $result[0]['bairro']);
 $sth->bindValue(':minPrice', (int)$minPrice, PDO::PARAM_INT);
 $sth->bindValue(':maxPrice', (int)$maxPrice, PDO::PARAM_INT);
 $sth->execute();
 $results = $sth -> fetchAll();
 if(empty($results)) { $dbh = new PDO('mysql:host=' . DB_HOST . ';
dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
 $sql = "SELECT * FROM(
	SELECT * FROM em_properties 
	WHERE categoria_modelo_unidade_descricao = :categoria 
		AND id != :id AND categoria_divisao_descricao = :tipo AND status = 'Ativo'
		ORDER BY RAND() LIMIT 3) Prop ORDER BY $precoVenda DESC, $precoLocacao DESC ";
 $sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
 $sth->bindValue(':id', (int)$id, PDO::PARAM_INT);
 $sth->bindValue(':categoria', $result[0]['categoria_modelo_unidade_descricao']);
 $sth->bindValue(':tipo', $result[0]['categoria_divisao_descricao']);
 $sth->execute();
 $results = $sth -> fetchAll();
 } 
?>
<div class="home-properties">
	<h2>Mais sugestões para você</h2>
	
<?php if (!empty($results)) : foreach ($results as $prop) : 
?>
<div class="col-md-4">		
<?php include(locate_template('template-part-propertylist2.php')); ?>
</div>	
<?php endforeach;
 endif;
 
?>
</div><!--/.home-properties-->

<div class="clearfix"></div>