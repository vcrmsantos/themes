<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php
                /**
                 * Functions hooked in to storefront_page add_action
                 *
                 * @hooked storefront_page_header          - 10
                 * @hooked storefront_page_content         - 20
                 */
                do_action('storefront_page');
                ?>
            </div>
        </div>
    </div>
</div><!-- #post-## -->
