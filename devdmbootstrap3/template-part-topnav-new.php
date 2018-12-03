<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new-style.css">
<style>
    .navbar-fixed-top {
    top: auto;
}
</style>
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
<div class="dmbs-top-menu <?= isset($currentpage) ? $currentpage : '' ?>">
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="row-address row">

                <div class="col-md-3 dmbs-header-img col-xs-12 text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Lopes Erwin Maack">
                        <h1>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-teste.png" alt="Erwin Maack">
                            <span>Lopes Erwin Maack</span>
                        </h1>
                    </a>
                </div>

                <ul class="col-md-7 address hidden-xs text-center">
                    <li>
                        <a href="https://goo.gl/maps/oyWq2rd2jKn" title="Veja no google Maps" target="_gmap">
                            Rua São Benedito, 1287 - Santo Amaro - São Paulo / SP CEP 04735-003
                        </a>
                    </li>

                    <li>
                        <a href="tel:5694-2222" title="Clique aqui e ligue pelo celular">
                            <i class="fa fa-phone">&nbsp;</i>&nbsp;(11)
                            <span class="strong">5694-2222</span>
                        </a>
                    </li>
                </ul>
                <div class="col-md-2 hidden-xs text-center">
                    <div class="social-icons">
                        <a href="http://www.facebook.com/lopeserwinmaack" title="Conheça o nosso facebook!" target="_facebook">
                            <i class="fa fa-facebook fa-icon-special" aria-hidden="true">&nbsp;</i>
                        </a>
                        <a href="https://plus.google.com/108439445162457545114" title="Conheça o nosso Google Plus!"
                            target="_gplus">
                            <i class="fa fa-google-plus fa-icon-special" aria-hidden="true">&nbsp;</i>
                        </a>
                        <a href="https://twitter.com/lopeserwinmaack" title="Conheça o nosso twitter!" target="_twitter">
                            <i class="fa fa-twitter fa-icon-special" aria-hidden="true">&nbsp;</i>
                        </a>
                        <a href="https://www.instagram.com/lopeserwinmaack" title="Conheça o nosso instagram!" target="_instagram">
                            <i class="fa fa-instagram fa-icon-special" aria-hidden="true">&nbsp;</i>
                        </a>
                    </div>
                </div>
            </div>


            <?php global $dm_settings; ?>
            <div class="row row-no-padding row-menu">
                <div class="col-md-2 menu menu--menu text-center">
                    <div id="open-sidenav" type="button" class="navbar-toggle">
                        <button type="button" class="menu-mobile">
                            <span class="sr-only">
                                <?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span>Menu</span>
                    </div>
                </div>
                <div class="menu menu--search">
                    <div class="navbar-toggle">
                        <button type="button" class="menu-mobile">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-5">
                    <form class="search-header">
                        <button class="submit" type="submit"><i class="fa fa-search"></i></button>
                        <input class="input" type="text" placeholder="Busque por bairro ou cidade..." name="search">
                    </form>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo get_page_link(62); ?>" class="selected-imoveis">
                        <i class="fa fa-heart-o icon">
                            <span class="quantity">
                                <? echo $_SESSION['selectedCount']; ?></span>
                        </i>
                        <span>Imoveis Selecionados</span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo get_site_url(); ?>/cadastrar-imovel" class="button-default button-default--anuncie">Anuncie
                        o seu imóvel!</a>
                </div>
            </div>

        </div>
    </nav>

</div>

<?php endif; ?>