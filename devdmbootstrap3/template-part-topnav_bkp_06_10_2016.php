<?php if ( has_nav_menu( 'main_menu' ) ) : ?>	
    <div class="dmbs-top-menu ">
        <nav class="navbar navbar-fixed-top" role="navigation">
        	<ul class="address text-center">				
				<li>
					<a href="https://goo.gl/maps/oyWq2rd2jKn" title="Veja no google Maps" target="_gmap">
						<i class="fa fa-map-marker">&nbsp;</i>
						Rua São Benedito, 1287 - Santo Amaro - São Paulo / SP CEP 04735-003
					</a>
				</li>				
				<li><a href="#" title="Atendimento Online"><i class="fa fa-comments-o">&nbsp;</i>&nbsp;Atendimento Online</a></li>	
				<li><a href="<?php echo get_page_link(62); ?> " title="Clique aqui e veja nossos Imóveis Selecionados"><i class="fa fa-home">&nbsp;</i>&nbsp;Imóveis Selecionados<a></li>	
				<li>
					<a href="tel:5694.2222" title="Clique aqui e ligue pelo celular">
						<i class="fa fa-phone">&nbsp;</i>&nbsp;(11) <span class="strong">5694.2222</span>
					</a>
				</li>
				<!--
				<li>
					<a href="#" title="Conheça o nosso facebook!" target="_facebook" class="fa-special-container">
						<i class="fa fa-facebook fa-icon-special">&nbsp;</i>
					</a>
				</li>
				<li>
					<a href="#" title="Conheça o nosso youtube!" target="_youtube" class="fa-special-container">
						<i class="fa fa-youtube-play fa-icon-special">&nbsp;</i>
					</a>
				</li>-->
			</ul>
        	<div class="container">
        	
        	<?php global $dm_settings; ?>			
			
			<?php if ($dm_settings['show_header'] != 0) : ?>
				
					<?php if ( get_header_image() != '' ) : ?>
			            <div class="col-md-3 dmbs-header-img text-center col-xs-9 ">
			                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			                	<h1><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></h1>
			                </a>
			            </div>
			        <?php endif; ?>
			
			<?php endif; ?>

                <div class="navbar-header com-md-9 text-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                        <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
                <div class="clearfix"></div>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>

<?php endif; ?>