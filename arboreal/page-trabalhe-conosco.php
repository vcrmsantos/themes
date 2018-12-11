<?php
/* Template Name: Trabalhe Conosco */
get_header();
get_template_part('inc/banner');
?>
<section id="arboreal-section2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php echo do_shortcode('[breadcrumb]'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="container">
                    <?php get_template_part('inc/menu-inside-arboreal'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>