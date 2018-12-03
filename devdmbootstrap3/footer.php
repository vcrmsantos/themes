	<div class="clearfix"></div>
	
    <div class="dmbs-footer">        
        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

</div>
<!-- end main container -->


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

<?php wp_footer(); ?>

<script type="text/javascript">
(function ($) {
	$('a[target="_select"]').click(function(e) {
		e.preventDefault();
		var element = $(this);
		
		if ($(this).children('span').hasClass('selected')) {
			$(this).children('span').removeClass('selected');
			
			var url = "<?= get_page_link(62); ?>";
			$.ajax({
				url: url,
				type: 'POST',
				data: {ajax: true, id: $(this).data('property-id')}
			}).done(function(msg){
				element.html('<span></span> Selecionar imóvel');
				$('#selected-pro-link').html(msg);
				/*alert('Propriedade removida com sucesso!');*/
			}).fail(function(){
				alert('Ocorreu algum problema. Por favor, tente novamente');
			});	
		} else {
			$(this).children('span').addClass('selected');
			
			var url = "<?= get_page_link(62); ?>";
			$.ajax({
				url: url,
				type: 'GET',
				data: {ajax: true, id: $(this).data('property-id')}
			}).done(function(msg){
				element.html('<span class="selected"></span> Remover imóvel');
				$('#selected-pro-link').html(msg);
				/*alert('Propriedade adicionada com sucesso!');*/
			}).fail(function(){
				alert('Ocorreu algum problema. Por favor, tente novamente');
			});	
		}
	});
})(jQuery);

jQuery(".menu--search").click(function(){
    jQuery(".selected-imoveis").toggleClass('-active');
    jQuery(".button-default--anuncie").toggleClass('-active');
    jQuery(".search-header").toggleClass('-active');
});


document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
</html>