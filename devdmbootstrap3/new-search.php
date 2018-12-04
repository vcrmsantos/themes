<?php /* Template Name: New search */ ?>
<?php 
/**
 * Carrega a API do WordPress 
 */
$page = (isset($_GET['page'])) ? filter_var($_GET['page'], FILTER_SANITIZE_NUMBER_INT) : 1;
if ($page < 1) {
	$page = 1;
}
$pageLimit = 16;
$pageStart = ($page - 1) * $pageLimit;

$search = $_GET["search-all"];
$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$sql = "SELECT * FROM em_properties WHERE id = :id OR localidade LIKE :search OR bairro LIKE :search OR logradouro_descricao LIKE :search AND status = 'Ativo' LIMIT :pageStart , :pageLimit";

$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->bindValue(':id', $search );
$sth->bindValue(':search', '%' . utf8_decode($search) . '%' );
$sth->bindValue(':pageStart', (int)$pageStart, PDO::PARAM_INT);
$sth->bindValue(':pageLimit', (int)$pageLimit, PDO::PARAM_INT);
$sth->execute();

$result = $sth->fetchAll();

?>


<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav-new'); ?>

<!-- start content container -->
<div class="content dmbs-content">	
     <?php include(locate_template('template-part-topsearch2.php')); ?>

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<div class="container">
			<div class="row">
				<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<h2 class="new-title"><?php the_title() ;?></h2>
			<?php include(locate_template('template-part-search-new.php')); ?> 
		</div>
		<div class="row">
			<?php include(locate_template('template-part-pagination.php')); ?>
		</div>
	</div>
</div>
<!-- end content container -->

<?php get_footer('new'); ?>
