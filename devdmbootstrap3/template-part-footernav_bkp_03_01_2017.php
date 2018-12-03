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

<div class="clearfix"></div>

<div class="full-footer">
	<div class="container">
		<footer>
			<div class="col-md-2 col-xs-12 hidden-md hidden-sm">				
				<?php
                wp_nav_menu( array(
                        'theme_location'    => 'footer_menu',
                        'depth'             => 2,
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>					
			</div>			
			<div class="col-sm-4 col-md-3 col-xs-12">		
				<a href="#" data-toggle="modal" data-target="#crediPronto">
					<img src="<?= get_template_directory_uri() ?>/images/site/financiamento.jpg" alt="Financiamento Imobiliário CrediPronto" class="img-responsive" />
				</a>				
			</div>
			<div class="col-sm-4 col-md-3 col-xs-12">
				<p>
					Horário de funcionamento:<br/>
					Segundas as sextas: 08:30 às 19:30h<br/>
					Sábados: 09:00 às 17:00h<br/>
					Domingos: 09:00 às 13:00h<br/>
					Feriados: 09:00 às 17:00h<br/>
				</p>
				<p><a href="javascript:void($zopim.livechat.window.show());" title="Atendimento Online"><i class="fa fa-comments-o">&nbsp;</i>&nbsp;Atendimento Online</a></p>	
				<p class="hidden-lg hidden-xs visible-sm"><a href="<?php get_permalink('297'); ?>" title="Conheça a nossa política de privacidade"><i class="fa fa-lock" aria-hidden="true">&nbsp;</i>&nbsp;Política de Privacidade</a></p>
			</div>			
			<div class="col-sm-4 col-xs-12 text-right">
				<a href="http://www.facebook/lopeserwinmaack" title="Conheça o nosso facebook!" target="_facebook" class="fa-special-container">
					<i class="fa fa-facebook fa-icon-special">&nbsp;</i>
				</a>
				<a href="https://plus.google.com/108439445162457545114" title="Conheça o nosso Google Plus!" target="_gplus" class="fa-special-container">
					<i class="fa fa-google-plus fa-icon-special">&nbsp;</i>
				</a>
				<a href="https://twitter.com/lopeserwinmaack" title="Conheça o nosso twitter!" target="_twitter" class="fa-special-container">
					<i class="fa fa-twitter fa-icon-special">&nbsp;</i>
				</a>
				<a href="https://www.instagram.com/lopeserwinmaack" title="Conheça o nosso instagram!" target="_instagram" class="fa-special-container">
					<i class="fa fa-instagram fa-icon-special">&nbsp;</i>
				</a>			
				<address>
					&copy; Erwin Maack Lopes. Imóveis na Zona Sul<br />
					Creci: J-22.612 - Todos os direitos reservados<br />
					Rua São Benedito, 1287 - Santo Amaro - São Paulo / SP <br />
					CEP 04735-003 - Design by <a href="http://www.blackhauz.com.br" title="Conheça a BlackHauz!" target="_blackhauz">BlackHauz</a>
				</address>
			</div>
		</footer>
	</div>
</div>
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