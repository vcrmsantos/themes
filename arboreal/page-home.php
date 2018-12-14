<?php
/* Template Name: Home */
get_header();
get_template_part('inc/banner');
?>
<section id="home-section2">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br><br>
                <h1 class="title-arboreal"><b>A Arboreal</b></h1><br>
                <p class="p-arboreal">
                    Todo trabalho desenvolvido pela <b>ARBOREAL</b> tem como base a entrega de produtos únicos, que mantém as qualidades
                    naturais da madeira e são planejados conforme as escolhas dos clientes. Esse compromisso com o desenvolvimento de um
                    móvel refinado e diferenciado começa na obtenção da matéria-prima para a fabricação, que prioritariamente deve ser
                    totalmente legal e com características que garantam acabamento e durabilidade à altura da marca.
                </p><br>
                <a class="btn-arboreal-light" href="<?php echo esc_url(get_page_link(11)); ?>">SAIBA MAIS</a><br><br><br><br><br>
            </div>
        </div>
    </div>
</div>
</section>
<section id="home-section3">
    <div class="container-fluid">
        <div class="row">
            <div id="categories-nav" class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div id="categories-title">Produtos</div>
                <ul id="home-products-categories" class="nav nav-tabs tabs-left">
                    <?php
                    $all_categories = getAllCategories();
                    foreach ($all_categories as $i => $cat) {
                        if ($cat->slug !== 'uncategorized') {
                            if ($i === 1) {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<i class="fas fa-arrow-right" style="margin-right: 15px;"></i>';
                            echo '<a href="#' . $cat->slug . '" data-toggle="tab">' . $cat->name . '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="tab-content">
                    <?php
                    foreach ($all_categories as $i => $cat) {
                        if ($cat->slug !== 'uncategorized') {
                            if ($i === 1) {
                                echo '<div class="tab-pane active" id="' . $cat->slug . '">';
                            } else {
                                echo '<div class="tab-pane" id="' . $cat->slug . '">';
                            }
                            echo '<div class="row" >';
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => 8,
                                'product_cat' => $cat->slug
                            );
                            $loop = new WP_Query($args);
                            foreach ($loop->posts as $product) {
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($product->ID), 'single-post-thumbnail');
                                ?>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6" style="padding: 0;">
                                    <div class="home-product">
                                        <img class="image" src="<?php echo $image[0]; ?>" data-id="<?php echo $product->ID; ?>">
                                        <div class="home-product-description">
                                            <div class="title"><?php echo $product->post_title; ?></div>
                                            <div class="price">
                                                <?php
                                                $_product = wc_get_product($product->ID);
                                                echo wc_price($_product->get_price()); ?>
                                            </div>
                                            <a class="product-link" href="<?php echo $product->guid; ?>"><i class="icon fas fa-arrow-right"></i> VER PRODUTO</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home-section4">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br><br>
                <h1 class="title-arboreal"><b>Know How</b></h1><br>
                <p class="p-arboreal">
                    Todo trabalho desenvolvido pela <b>ARBOREAL</b> tem como base a entrega de produtos únicos, que mantém as qualidades 
                    naturais da madeira e são planejados conforme as escolhas dos clientes. 
                </p><br>
                <div class="embed-responsive embed-responsive-16by9" style="max-width: 1135px; max-height: 455px;">
                    <iframe class="embed-responsive-item" src="<?php echo get_post_meta(get_the_ID(), 'video', true); ?>" allowfullscreen></iframe>
                </div><br><br>
                <a class="btn-arboreal-light" href="<?php echo esc_url(get_page_link(75)); ?>">SAIBA MAIS</a><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>
<section id="home-section5">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br><br>
                <h1 class="title-arboreal-design">Design & <br> <i style="font-size: 55px;color: #b5ada6;font-family: 'Rotis SemiSerif Std';">inspiração</i></h1><br>
                <p class="p-arboreal">
                    Produzimos peças personalizadas, como essa linda escrivaninha em #madeira maciça. Entre em contato
                    pelo e-mail contato@arboreal.com.br para encomendar a sua. 
                </p><br><br>
                <a class="btn-arboreal-light" href="<?php echo esc_url(get_page_link(32)); ?>">INSPIRE-SE</a><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
