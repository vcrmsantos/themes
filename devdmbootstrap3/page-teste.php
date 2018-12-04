<?php
/*
Template Name: Página Inicial
*/
?>

<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav-new'); ?>



<!-- start content container -->
<div class="content dmbs-content">
    <?php include(locate_template('template-part-topsearch2.php')); ?>
    <?php echo do_shortcode("[metaslider id=29]"); ?>
    <?php include(locate_template('template-part-bar-faleconosco.php')); ?>
    <?php include(locate_template('template-part-homeregions2.php')); ?>
    <?php include(locate_template('template-part-mosaico.php')); ?>
    
    <div class="container">
        <div class="row">
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
                <?php get_template_part('template-part', 'homeproperties2'); ?>
            </div>
        </div>
   </div>
</div> <!-- end content container -->

<?php include(locate_template('template-part-home-blog.php')); ?>
<?php get_template_part( 'template-sobre-a', 'erwin' ); ?>

<?php include(locate_template('footer-new.php')); // desse modo é possível passar variáveis ?>




<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>


<script>
    jQuery('.owl-imoveis').owlCarousel({
    loop:false,
    nav:false,
    margin:10,
    lazyLoad : true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            autoWidth:true,
            items:3,
        }
    }
});
</script>

