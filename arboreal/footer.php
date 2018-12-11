<footer id="arboreal_footer">
    <div class="carousel">
        <div id="instagram-carousel" class="owl-carousel" style="height: 200px;">
            <?php
            $access_token = '1449346102.74060a9.3ed21adfdbf646e9a8a5f0e68b962995';
            $return = instagram_api_curl_connect("https://api.instagram.com/v1/users/self/media/recent?access_token=" . $access_token);
            foreach ($return->data as $post) {
                echo '<div class="instagram-thumb"><img src="' . $post->images->thumbnail->url . '" /></div>';
                //echo '<div class="instagram-thumb" style="border: 2px #B5ADA6 solid;"></div>';
            }
            ?>
        </div>
        <a style="
           position: absolute;
           top: 50%;
           z-index: 1000;
           width: 50px;
           height: 50px;
           background-color: #191919;
           transform: translate(0, -50%)" href="https://www.instagram.com/arbo_real/?hl=pt-br" target="_blank"><i class="fab fa-instagram" style="    
                                                                                  margin: 10px;
                                                                                  font-size: 30px;"></i></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="logo-footer">
                    <a href="<?php echo get_home_url(); ?>">
                        <img border="0" alt="Arboreal" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-footer.png">
                    </a>
                </div><br>
                <p>
                    Seja o primeiro a descobrir as promoções<br>
                    exclusivas, os lookbooks mais recentes e as<br>
                    melhores tendências.
                </p>
                <div class="news-letter-footer">
                    <input class="newsletter-form-email-arboreal" type="text" placeholder="SEU E-MAIL">
                    <button class="newsletter-form-button btn-arboreal">CADASTRAR</button>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <h5 class="Bold">Institucional</h5><br>
                <?php
                wp_nav_menu(array(
                    'menu' => 'Footer',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'footer_menu',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <h5 class="Bold">Produtos</h5><br>
                <ul class="footer-ul">
                    <?php
                    $all_categories = getAllCategories();
                    foreach ($all_categories as $i => $cat) {
                        if ($cat->slug !== 'uncategorized') {
                            if ($_GET['product_cat'] === $cat->slug) {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . get_category_link($cat->cat_ID) . '">' . $cat->name . '</a>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h5 class="Bold">Contato</h5><br>
                <p>
                    <b>Tel: (19) 3935-8606</b> <br>
                    <b>contato@arboreal.com.br</b><br>
                    Ateliê: R. Crisolita, 80, Indaiatuba/SP<br>
                    CNPJ: 23.205.777/0001-98
                </p><br>
                <a href="https://www.facebook.com/arborealbr/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://br.pinterest.com/arborealbr/ambientes-decorados-arboreal/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/arbo_real/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCyPTkvjoIBGL-La8XutjQDA" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://plus.google.com/104847613085688550251" target="_blank"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="copyright">
                        <p class="small">© 2018 Opt2flow 
                        <a href="http://www.opt2flow.com.br/" class="vcenter">
                            <img border="0" alt="Opt2Flow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/optLogo2.png" class="optLogo pull-right" ></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>