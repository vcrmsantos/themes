<!-- Footer nav -->       
<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
<div class="dmbs-footer-menu">
    <nav class="navbar navbar-fixed-bottom" role="navigation">
    	<div class="box-red" id="box-red">
    		<div class="col-md-1"></div>
    		<div class="col-md-10">
    			<div class="col-xs-6 col-sm-3 boundary-border text-center">
    				<a href="tel:+5501156942222">Ligue agora! 11 5694-2222</a>    			
        		</div>
        		<div class="col-xs-6 col-sm-3  boundary-border text-center no-border">
        			<a href="<?php echo get_page_link(62); ?>" title="Clique aqui para ver os imóveis selecionados por você" id="selected-pro-link">
        				Imóveis selecionados (<?= $_SESSION['selectedCount'] ?>)
        			</a>
        		</div>
        		<div class="clearfixmin"></div>
        		<div class="col-xs-6 col-sm-3  boundary-border text-center">
        			<a href="#" data-toggle="modal" data-target="#faleConosco" title="Acesse nosso formulário de contato">Atendimento por E-mail</a>
        		</div>
        		<div class="col-xs-6 col-sm-3 text-center">
        			<a href="#" data-toggle="modal" data-target="#ligamosParaVoce" title="Deixe seus dados de contato">
        				Ligamos para você <span>Seg. a Sex. das 9 às 18h</span> 
        			</a>
        		</div>
    		</div>
    		<div class="col-md-1"></div>
    		<div class="clearfix"></div>       		
    	</div> 
    	<span class="close-box-red" id="close-box-red"></span>       
    </nav>
</div>
<?php endif; ?>


<section class="home-contact">
    <div class="container">
        <div class="home-contact__title">Ainda não encontrou o que está procurando? </div>
        <div class="home-contact__subtitle">Preencha o formulário abaixo e em breve um de nossos corretores entrará em contato.</div>
       <?php echo do_shortcode( '[contact-form-7 id="2557" title="Formulário de contato home"]' ); ?>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row row-no-padding">
            <div class="col-md-4">
                <div class="footer__col">
                    <address>
                        <b>&copy; Lopes Erwin Maack. Imóveis na Zona Sul</b><br />
                        Creci: J-22.612 - Todos os direitos reservados<br />
                        Rua São Benedito, 1287 - Santo Amaro - São Paulo / SP <br />
                        CEP 04735-003 - Design by <a href="http://www.blackhauz.com.br" title="Conheça a BlackHauz!" target="_blackhauz">BlackHauz</a>
                    </address>
                    <p>
                        <b>Horário de funcionamento:</b><br />
                        Segundas as sextas: 08:30 às 19:00h<br />
                        Sábados: 09:00 às 17:00h<br />
                        Domingos e Feriados: Fechado<br />
                    </p>
                    <p><a href="javascript:void($zopim.livechat.window.show());" title="Atendimento Online"><i class="fa fa-comments-o">&nbsp;</i>&nbsp;Atendimento
                            Online</a></p>
                    <p class="hidden-lg hidden-xs visible-sm"><a href="<?php get_permalink('297'); ?>" title="Conheça a nossa política de privacidade"><i
                                class="fa fa-lock" aria-hidden="true">&nbsp;</i>&nbsp;Política de Privacidade</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__col footer__col--medium">
                    <b>Mapa do site</b><br />
                    <?php
                    wp_nav_menu( array(
                            'theme_location'    => 'footer_menu',
                            'depth'             => 2,
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                    <a href="<?php echo get_site_url(); ?>/cadastrar-imovel" class="button-default button-default--anuncie">Anuncie o seu imóvel!</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__col text-center">		
                    <a href="#" data-toggle="modal" data-target="#crediPronto">
                        <img src="<?= get_template_directory_uri() ?>/images/site/financiamento.jpg" alt="Financiamento Imobiliário CrediPronto" class="img-responsive center-block" />
                    </a>
                    <a class="button-default button-default--anuncie" href="#" data-toggle="modal" data-target="#crediPronto">Simule agora!</a>			
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="crediPronto" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Financiamento Rápido, Fácil e Simples</h4>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="520px" src="https://simulador.credipronto.com.br/?account_id=c7c600a3-f540-f209-9a98-53f799020791"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="faleConosco" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nos envie um e-mail</h4>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="38" title="Formulário de contato"]'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ligamosParaVoce" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informe seu nome e telefone que ligaremos para você o mais breve possível</h4>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="102" title="Ligamos para você"]'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>