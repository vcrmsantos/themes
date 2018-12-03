	<div class="clearfix"></div>
	
    <div class="dmbs-footer">        
        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

</div>
<!-- end main container -->

<?php wp_footer(); ?>

<script type="text/javascript">
(function ($) {
	$('.submit-form-default, .contact-input .wpcf7-submit').click(function(e) {
		console.log('grm');
		window.google_trackConversion({
			google_conversion_id: 852215579, 
			google_custom_params: window.google_tag_params,
			google_remarketing_only: true
		});
	});
	
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
</script>

</body>
</html>