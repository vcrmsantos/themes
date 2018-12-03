<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="dmbs-content content">
	<?php include(locate_template('template-part-topsearch.php')); ?>
	<div class="container">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
		</div>	
	    <div class="col-md-12 dmbs-main">	
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
	    </div>	
	</div>
</div>
<!-- end content container -->

<?php get_footer(); ?>
