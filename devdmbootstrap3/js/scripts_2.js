(function ($) {
	$('#advanced-search').click(function(e){
		e.preventDefault();
		$('.top-search-items .search-item-special').toggleClass('sr-only');
	});
})(jQuery);