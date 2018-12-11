<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */
if (!defined('ABSPATH')) {
    exit;
}

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );
?>

<div class="header-space-clear-fix" style="background-color: #fff;"></div>
<div class="container-fluid" style="background-color: #fff;"><br>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <?php //woocommerce_breadcrumb(); ?>
        </div>
    </div>
    <div class="row">
        <div id="primary" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <main id="main" class="site-main" role="main">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
                    <?php echo do_shortcode('[aws_search_form]'); ?>
                </div><br>
                <header class="woocommerce-products-header text-center">
                    <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                        <h1 class="title-arboreal">Escolha o seu modelo favorito</h1>
                    <?php endif; ?>

                    <?php
                    /**
                     * Hook: woocommerce_archive_description.
                     *
                     * @hooked woocommerce_taxonomy_archive_description - 10
                     * @hooked woocommerce_product_archive_description - 10
                     */
                    do_action('woocommerce_archive_description');
                    ?>
                </header>
                <?php
                if (have_posts()) {

                    /**
                     * Hook: woocommerce_before_shop_loop.
                     *
                     * @hooked wc_print_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    //do_action('woocommerce_before_shop_loop');
                    ?>
                    <div class="row">
                        <div id="categories-nav" class="col-categories">
                            <div class="categories-box">
                                <div id="categories-title" style="font-size: 28px; margin-top: 25px;">Produtos</div><br>
                                <ul id="home-products-categories" class="nav nav-tabs tabs-left" style="font-size: 16px; margin-bottom: 25px;">
                                    <?php
                                    $all_categories = getAllCategories();
                                    foreach ($all_categories as $i => $cat) {
                                        if ($cat->slug !== 'uncategorized') {
                                            if ($_GET['product_cat'] === $cat->slug) {
                                                echo '<li class="active">';
                                            } else {
                                                echo '<li>';
                                            }
                                            echo '<i class="fas fa-arrow-right" style="margin-right: 15px;"></i>';
                                            echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->name . '</a>';
                                            echo '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                        woocommerce_product_loop_start();

                        if (wc_get_loop_prop('total')) {
                            while (have_posts()) {
                                the_post();

                                /**
                                 * Hook: woocommerce_shop_loop.
                                 *
                                 * @hooked WC_Structured_Data::generate_product_data() - 10
                                 */
                                do_action('woocommerce_shop_loop');

                                wc_get_template_part('content', 'product');
                            }
                        }

                        woocommerce_product_loop_end();
                        ?>
                    </div>

                    <?php
                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action('woocommerce_after_shop_loop');
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action('woocommerce_no_products_found');
                }

                /**
                 * Hook: woocommerce_after_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
//do_action( 'woocommerce_after_main_content' );

                /**
                 * Hook: woocommerce_sidebar.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                do_action('woocommerce_sidebar');
                ?>
            </main>
        </div>
    </div>
</div>
<section id="arboreal-section3" style="background-color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"><br>
                <p class="p-arboreal">
                    Solicite uma cotação de outra peça que não encontrou.<br>
                    Qualquer dúvida, fale conosco. Temos prazer em atender-lo.
                </p><br><br>
                <a style="color: #191919" class="btn-arboreal-light">SOLICITAR UM ORÇAMENTO</a><br><br><br>
            </div>
        </div>
    </div>
</section>
<?php get_footer('shop'); ?>

