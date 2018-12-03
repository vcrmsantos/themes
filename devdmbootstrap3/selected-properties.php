<?php
/*
Template Name: Imoveis selecionados
*/
?>
<?php
session_start();
 
if (isset($_GET['id']) && !empty($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
	$_SESSION['properties'][$_GET['id']] = $_GET['id'];
}

if (isset($_POST['id']) && !empty($_POST['id']) && filter_var($_POST['id'], FILTER_VALIDATE_INT)) {
	unset($_SESSION['properties'][$_POST['id']]);
}

if (isset($_GET['ajax']) || isset($_POST['ajax'])) {
	echo 'Imóveis selecionados (' . ((isset($_SESSION['properties'])) ? count($_SESSION['properties']) : 0) . ')';
	exit;
}

$concat = '';
if (!empty($_SESSION['properties'])) {
	foreach($_SESSION['properties'] as $property) {
		$conditions["property_$property"] = $property;
		$where .= $concat . "id = :property_$property";
		$concat = ' OR ';
	}
	
	$page = (isset($_GET['page'])) ? filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT) : 1;
	if ($page < 1) {
		$page = 1;
	}
	$pageLimit = 16;
	$pageStart = ($page - 1) * $pageLimit;
	
	$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
	$sql = "SELECT * FROM em_properties WHERE $where AND status = 'Ativo' LIMIT :pageStart , :pageLimit";	
	$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	
	foreach ($conditions as $key => $value) {
		$sth->bindValue(':' . $key, $value, PDO::PARAM_INT);	
	}
	$sth->bindValue(':pageStart', (int)$pageStart, PDO::PARAM_INT);
	$sth->bindValue(':pageLimit', (int)$pageLimit, PDO::PARAM_INT);
	$sth->execute();
	
	$result = $sth->fetchAll();
	
	$sql = "SELECT COUNT(*) FROM em_properties WHERE $where AND status = 'Ativo'";
	$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	foreach ($conditions as $key => $value) {
		$sth->bindValue(':' . $key, $value);	
	}
	$sth->execute();	
	
	$resultTotal = $sth->fetchAll();
	$resultTotalCount = $resultTotal[0][0];
} ?>

<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="content dmbs-content">	
     <?php include(locate_template('template-part-topsearch.php')); ?>
    <div class="container">
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
	</div>
		
    <div class="col-md-12 dmbs-main search-properties">	
	        <?php // theloop
	        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <h2 class="page-header"><?php the_title() ;?></h2>
	            
	            <?php echo the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
	            <?php the_content(); ?>
	            <?php wp_link_pages(); ?>
	            <?php comments_template(); ?>
	
	        <?php endwhile; ?>
	        <?php else: ?>
	
	            <?php get_404_template(); ?>
	
	        <?php endif; ?>		
		<?php $selected_property = true; include(locate_template('template-part-search.php')); ?> 
   </div>
   
   </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>

