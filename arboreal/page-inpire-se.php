<?php
/* Template Name: Inpire-se */
get_header();
get_template_part('inc/banner');

$itens = getGaleriaItens();
?>
<section id="arboreal-section2">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php
                echo do_shortcode('[breadcrumb]');
                ?>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal"><b>Inpire-se nos ambientes decorados</b></h1><br><br><br>
                <div id="carouselInpire" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        foreach ($itens as $i => $post) {
                            ?>
                            <div class="carousel-item <?php echo ($i === 0) ? 'active' : ''; ?>">
                                <img class="d-block" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>">
                                <div class="carousel-caption">
                                    <h4><?php echo get_the_title($post); ?></h4>
                                    <div class="p-arboreal">
                                        <?php echo apply_filters('the_content', $post->post_content); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <ol class="carousel-indicators">
                        <?php
                        foreach ($itens as $i => $post) {
                            ?>
                            <li data-target="#carouselInpire" data-slide-to="<?php echo $i; ?>" <?php echo ($i === 0) ? 'class="active"' : ''; ?> style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0]; ?>);"></li>
                            <?php
                        }
                        ?>
                    </ol>
                    <a class="carousel-control-prev" href="#carouselInpire" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <i class="fas fa-angle-left" style="font-size: 25px;padding: 5px;"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselInpire" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <i class="fas fa-angle-right" style="font-size: 25px;padding: 5px;"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>
<?php get_footer(); ?>
