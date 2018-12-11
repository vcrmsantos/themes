<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');
?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
//do_action( 'woocommerce_before_main_content' );
?>
<br><br>
<div class="header-space-clear-fix" style="background-color: #fff;"></div>
<section id="arboreal-section2">
    <div class="container"><br><br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php while (have_posts()) : the_post(); ?>

                    <?php wc_get_template_part('content', 'single-product'); ?>

                <?php endwhile; // end of the loop. ?>

                <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
//do_action( 'woocommerce_after_main_content' );
                ?>

                <?php
                /**
                 * woocommerce_sidebar hook.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                //do_action('woocommerce_sidebar');
                ?>

            </div>
        </div>
    </div><br><br>
</section>
<section id="personalize-section2">
    <div class="container"><br><br>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img style="margin: auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/madeira-placeholder.png' ?>">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #b5ada6;">Madeira <br> <i style="font-size: 55px;color: #d7d2cb;font-family: 'Rotis SemiSerif Std';">rústico &<br> sofisticado</i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Lareira Ecológica para decoração em área externa com <br>
                    toque rústico. Produzida em toras e troncos com<br> 
                    queimador ecológico, funciona a álcool. Lareira em tronco e madeira <br>
                    maciça. COD - A04<br>

                </p><br><br>
                <select class="atributes">
                    <option>Selecionar Tamanho</select>
                </select>
                <a class="single_add_to_cart_button" style="margin-top: 20px;">Adicionar ao carrinho</a><br><br><br><br><br>
            </div>
        </div>
    </div><br><br>
</section>
<section id="personalize-section3">
    <div class="container"><br><br>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="title-arboreal-design" style="color: #191919;">Pés em <br> <i style="font-size: 55px;font-family: 'Rotis SemiSerif Std';">madeira</i></h1><br>
                <p class="p-arboreal" style="color: #b5ada6;     font-size: 12px;">
                    Lareira Ecológica para decoração em área externa com <br>
                    toque rústico. Produzida em toras e troncos com<br> 
                    queimador ecológico, funciona a álcool. Lareira em tronco e madeira <br>
                    maciça. COD - A04<br>

                </p><br><br>
                <select class="atributes">
                    <option>Selecionar Tamanho</select>
                </select>
                <a class="single_add_to_cart_button" style="margin-top: 20px;">Adicionar ao carrinho</a><br><br><br><br><br>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img style="margin: auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/mesa-placeholder.png' ?>">
            </div>
        </div>


    </div><br><br>
</section>
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
<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
