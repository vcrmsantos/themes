<?php
/*
Template Name: Página Inicial
*/
?>

<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="content dmbs-content">
	
	<?php echo do_shortcode("[metaslider id=29]"); ?>
	
    <?php include(locate_template('template-part-topsearch.php')); ?>
    
    <?php include(locate_template('template-part-homeshortcuts.php')); ?>
    
    <div class="container">

    <div class="col-md-12 dmbs-main">

        <?php
            //if this was a search we display a page header with the results count. If there were no results we display the search form.
            if (is_search()) :

                 $total_results = $wp_query->found_posts;

                 echo "<h2 class='page-header'>" . sprintf( __('%s Search Results for "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";

                 if ($total_results == 0) :
                     get_search_form(true);
                 endif;

            endif;

        ?>
		<?php get_template_part('template-part', 'homeproperties'); ?>
   </div>
   
   </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>

