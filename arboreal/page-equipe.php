<?php
/* Template Name: Equipe */
get_header();
get_template_part('inc/banner');

$equipe = getEquipe();
?>
<section id="arboreal-section2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php
                echo do_shortcode('[breadcrumb]');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="container">
                    <?php
                    get_template_part('inc/menu-inside-arboreal');
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div><br><br>
</section>
<section class="quem-somos">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="title-arboreal">Quem Somos</h1>
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($equipe as $i => $post) {
                            ?>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center funcionario-box">
                                <img style="margin:auto;" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>">
                                <h4 class="nome-funcionario"><?php echo get_the_title($post); ?></h4>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>