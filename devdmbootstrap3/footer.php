	<div class="clearfix"></div>
	
    <div class="dmbs-footer">        
        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

</div>
<!-- end main container -->

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


document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
</html>