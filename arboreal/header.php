<?php get_template_part('inc/opt2flow_functions'); ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>
            <?php wp_title(); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <nav id="header_menu_top_row1" class="navbar navbar-expand-md navbar-dark fixed-top header_menu_top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="logo">
                            <a href="<?php echo get_site_url(); ?>">
                                <img alt="Arboreal" src="<?php echo get_site_url(); ?>/wp-content/themes/arboreal/assets/img/logo.png" class="logo_imgae">
                                <img alt="Arboreal" src="<?php echo get_site_url(); ?>/wp-content/themes/arboreal/assets/img/logo-color.png" class="logo_imgae_color" style="display: none;">
                            </a>
                        </div>
                        <div class="mini-cart-header">
                            <a href="#" class="dropdown-back" data-toggle="dropdown">
                                <div class="basket-item-count">
                                    <span class="cart-items-count count">
                                        <?php
                                        echo WC()->cart->get_cart_contents_count();
                                        ?>
                                    </span>
                                </div>
                                <img alt="cart" src="<?php echo get_site_url(); ?>/wp-content/themes/arboreal/assets/img/mincart-icon.png">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li> <div class="widget_shopping_cart_content">
                                        <?php
                                        woocommerce_mini_cart();
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <nav id="header_menu_top_row2" class="navbar navbar-expand-md navbar-dark fixed-top header_menu_top">
                <div class="container">
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'header',
                            'theme_location' => 'header',
                            'depth' => 12,
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'Menu Principal Parte 2',
                            'theme_location' => 'header',
                            'depth' => 12,
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
            <nav id="header_submenu_produtos_padrao" class="navbar navbar-expand-md navbar-dark fixed-top header_menu_bottom header_submenu">
                <?php
                wp_nav_menu(array(
                    'menu' => 'A Arboreal',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'sub_menu_a_arboreal',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>

            </nav>
            <nav id="header_submenu_produtos" class="navbar navbar-expand-md navbar-dark fixed-top header_menu_bottom header_submenu">
                <ul id="menu-produtos" class="nav navbar-nav">
                    <?php
                    $all_categories = getAllCategories();
                    foreach ($all_categories as $i => $cat) {
                        if ($cat->slug !== 'uncategorized') {
                            echo '<li>';
                            echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->name . '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </nav>
            <div class="col-full">

                <?php
                /**
                 * Functions hooked into storefront_header action
                 *
                 * @hooked storefront_skip_links                       - 0
                 * @hooked storefront_social_icons                     - 10
                 * @hooked storefront_site_branding                    - 20
                 * @hooked storefront_secondary_navigation             - 30
                 * @hooked storefront_product_search                   - 40
                 * @hooked storefront_primary_navigation_wrapper       - 42
                 * @hooked storefront_primary_navigation               - 50
                 * @hooked storefront_header_cart                      - 60
                 * @hooked storefront_primary_navigation_wrapper_close - 68
                 */
                //do_action( 'storefront_header' ); 
                ?>

            </div>
        </header> 
<a id="scroll-to-top" class="scroll-to-top" title="Clique aqui para ir pro top"><i class="fa fa-arrow-up"></i></a>

<main class="site-content">