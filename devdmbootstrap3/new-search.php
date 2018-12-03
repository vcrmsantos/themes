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
		<?php include(locate_template('template-part-search.php')); ?> 
   </div>
   <?php include(locate_template('template-part-pagination.php')); ?>
   </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>
