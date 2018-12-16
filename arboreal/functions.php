<?php 
/**
 * ArboReal functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ArboReal
 */


if (!function_exists('arboReal_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function arboReal_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        
        /*
         * Enable excerpt for pages.
         */
        add_post_type_support('page', 'excerpt');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'header' => "Menu Principal",
            'footer' => "Menu do Rodapé",
            'mobile-itens' => "Itens Mobile",
        ));

        
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

    }

endif;
add_action('after_setup_theme', 'arboReal_setup');

/* 
 * Register Custom Navigation Walker 
 */
require_once(get_stylesheet_directory() . '/inc/wp_bootstrap_navwalker.php');

/**
 * WooCoomerce Support
 */
if (class_exists('WooCommerce')) {
    require get_stylesheet_directory() . '/inc/woo-setup.php';
}


/* 
 * Register Sidebars
 */

function arboReal_sidebars() {
    
}
add_action('init', 'arboReal_sidebars');


/**
 * Enqueue scripts and styles.
 */
function arboReal_admin_scripts() {

}

add_action('admin_enqueue_scripts', 'arboReal_admin_scripts');


/**
 * Enqueue scripts and styles.
 */
function arboReal_scripts() {
    /*
     * Styles
     */
   
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel-min-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css');
    
    //Fonts 
    /* wp_enqueue_style('Gotham', get_stylesheet_directory_uri() . '/assets/fonts/Gotham.css');
    wp_enqueue_style('Gotham Medium', get_stylesheet_directory_uri() . '/assets/fonts/Gotham Medium.css');
    wp_enqueue_style('Gotham Light', get_stylesheet_directory_uri() . '/assets/fonts/Gotham Light.css');
    wp_enqueue_style('Gotham Book', get_stylesheet_directory_uri() . '/assets/fonts/Gotham Book.css');
    wp_enqueue_style('Gotham Bold', get_stylesheet_directory_uri() . '/assets/fonts/Gotham Bold.css');
    wp_enqueue_style('Gotham Black', get_stylesheet_directory_uri() . '/assets/fonts/Gotham Black.css'); */
    wp_enqueue_style('font-karu', get_stylesheet_directory_uri() . '/assets/fonts/Karu/karu.css');
    wp_enqueue_style('Rotis SemiSerif Std', get_stylesheet_directory_uri() . '/assets/fonts/Rotis SemiSerif Std.css');
   
    /*
     * Scripts
     */
    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.12.9', false);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery','popper'), '4.0.0', false);
    wp_enqueue_script( 'arboreal-custom-js' , get_stylesheet_directory_uri() . '/assets/js/custom.js' );
    wp_enqueue_script( 'owl-carousel-min-js' , get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js' );

}

add_action('wp_enqueue_scripts', 'arboReal_scripts');

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

function my_remove_wp_seo_meta_box() {
	remove_meta_box('wpseo_meta', 'galeria', 'normal');
        remove_meta_box('wpseo_meta', 'funcionarios', 'normal');
        remove_meta_box('wpseo_meta', 'personalize', 'normal');
        remove_meta_box('wpseo_meta', 'modelos_dos_pes', 'normal');
        remove_meta_box('wpseo_meta', 'materias_dos_pes', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box', 100);


add_theme_support( 'woocommerce', array(
    'single_image_width' => 500,
    ) );


    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    
    
    if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
        function woocommerce_template_loop_product_thumbnail() {
            echo woocommerce_get_product_thumbnail();
        } 
    }
    if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
        function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
            global $post, $woocommerce;
            $output = '<div class="box-produtos__image">';
    
            if ( has_post_thumbnail() ) {               
                $output .= get_the_post_thumbnail( $post->ID, $size );              
            }                       
            $output .= '</div>';
            return $output;
        }
    }

    add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<span class="cart-items-count count"><?php echo WC()->cart->get_cart_contents_count(); ?></span> 
	<?php
	
	$fragments['span.cart-items-count.count'] = ob_get_clean();
	
	return $fragments;
}