<?php
/*
Template Name: Página Inicial
*/
?>

<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php //get_template_part('template-part', 'topnav'); ?>



<!-- start content container -->
<div class="content dmbs-content">


	

	<?php echo do_shortcode("[metaslider id=29]"); ?>

    <section class="fale-conosco">
    <div class="container-fluid">
        <div class="row row-no-padding">
            <div class="fale-conosco__title">Fale conosco</div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-heart"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text">Lopes</span><br>
                        <span class="text__big">Erwin Maack</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Vendas</span><br>
                        <span class="text">(11) 5694-2222</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-comments-o"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Corretor</span><br>
                        <span class="text">Online</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-whatsapp"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Atendimento via</span><br>
                        <span class="text">WhatsApp</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5ths">
                <div class="widgets_div">
                    <div class="icon_div">
                        <span><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <div class="text_div">
                        <span class="text__big">Atendimento por</span><br>
                        <span class="text">E-MAIL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

    <?php include(locate_template('template-part-homeregions2.php')); ?>
    <?php include(locate_template('template-part-mosaico.php')); ?>
    <?php //include(locate_template('template-part-homeshortcuts.php')); ?>
    
    
    <div class="container">

    <div class="col-md-12 dmbs-main">

        <?php
            //if this was a search we display a page header with the results count. If there were no results we display the search form.
            if (is_search()) :

                 $total_results = $wp_query->found_posts;

                 echo "<h2 class='page-header'>" . sprintf( __('%s Search Results for "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";

                 if ($total_results == 0) :
                     get_search_form(true);
                 endif;

            endif;

        ?>
		<?php get_template_part('template-part', 'homeproperties2'); ?>
   </div>
   
   </div>

</div>
<!-- end content container -->

    

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


<?php include(locate_template('template-part-home-blog.php')); ?>
<?php get_template_part( 'template-sobre-a', 'erwin' ); ?>

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






<?php wp_footer(); ?>

<script type="text/javascript">
(function ($) {
	$('a[target="_select"]').click(function(e) {
		e.preventDefault();
		var element = $(this);
		
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
            $(this).addClass('fa-heart-o');
            $(this).attr('title', 'Clique aqui para incluir este imóvel na lista de imóveis favoritos');
			
			var url = "<?= get_page_link(62); ?>";
			$.ajax({
				url: url,
				type: 'POST',
				data: {ajax: true, id: $(this).data('property-id')}
			}).done(function(msg){
				$('#selected-pro-link').html(msg);
				alert('Propriedade removida com sucesso!');
			}).fail(function(){
				alert('Ocorreu algum problema. Por favor, tente novamente');
			});	
		} else {
            $(this).removeClass('fa-heart-o');
			$(this).addClass('selected fa-heart');
            $(this).attr('title', 'Clique aqui para remover este imóvel na lista de imóveis favoritos');
			
			var url = "<?= get_page_link(62); ?>";
			$.ajax({
				url: url,
				type: 'GET',
				data: {ajax: true, id: $(this).data('property-id')}
			}).done(function(msg){
				$('#selected-pro-link').html(msg);
				alert('Propriedade adicionada com sucesso!');
			}).fail(function(){
				alert('Ocorreu algum problema. Por favor, tente novamente');
			});	
		}
	});
})(jQuery);
</script>


<script>

jQuery(".menu--search").click(function(){
    jQuery(".selected-imoveis").toggleClass('-active');
    jQuery(".button-default--anuncie").toggleClass('-active');
    jQuery(".search-header").toggleClass('-active');
});

</script>








<div class="navbar">
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
                    <a href="https://plus.google.com/108439445162457545114" title="Conheça o nosso Google Plus!" target="_gplus">
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

    </div>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    jQuery('.owl-imoveis').owlCarousel({
    loop:false,
    nav:false,
    margin:10,
    lazyLoad : true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            autoWidth:true,
            items:3,
        }
    }
});
</script>