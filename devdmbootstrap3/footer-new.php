 
<?php get_template_part('template-part', 'footernav-new'); ?>


</div>
<!-- end main container -->

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

document.addEventListener('contextmenu', event => event.preventDefault());


var body = document.querySelector("body");
var nav = document.querySelector("nav.navbar");
var content = document.querySelector(".content");

document.getElementById("open-sidenav").onclick = function() {openNav()};
document.getElementById("close-sidenav").onclick = function() {closeNav()};

function openNav() {
    body.classList.add("sidenav--active");
    nav.classList.remove("navbar-fixed-top");
    content.classList.remove("dmbs-content");
}

function closeNav() {
    body.classList.remove("sidenav--active");
    nav.classList.add("navbar-fixed-top");
    content.classList.add("dmbs-content");
}

</script>

</body>
</html>