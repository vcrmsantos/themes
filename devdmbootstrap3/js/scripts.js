(function ($) {
	if ($('.checkbox-big2').length) {
		$('.checkbox-big2').click(function(){
			$(this).closest('form').submit();
		});
	}
	
	if($('#btn-reset').length) { 
		$('#btn-reset').click(function(){
			$('.checkbox-big').removeClass('checked');
			$('input[name="especial"]').removeAttr('checked');
			$('.top-search-form-page select[multiple="multiple"] option').each(function() {
                $(this).prop('selected', false);
                $(this).removeAttr('selected');
           });
			$('.top-search-form-page select[multiple="multiple"]').multiselect('refresh');
		});
	}
	
	
	
	if ($('#send-friend').length) {
		$('#send-friend').click(function(e){
			e.preventDefault();
			$('#send-friend-form').slideToggle();
		});
	}
	
	if ($('#contact-form').length) {
		$('#contact-form').click(function(e){
			e.preventDefault();
			$('#formContactForm').slideToggle();
		});
	}

	if ($('.checkbox-big').length) {
		$('.checkbox-big').click(function(){
			$(this).toggleClass('checked');
			$(this).prev().prop('checked', !$(this).prev().prop('checked'));
		});
	}
	
	if ($('select[multiple="multiple"]').length) {
		$('select[multiple="multiple"]').each(function(){
			$(this).before('<div class="clearfix"></div>');
			var placeholder = $('#' + $(this).attr('id') + ' option:eq(0)').html();
			$('#' + $(this).attr('id') + ' option:eq(0)').remove();
			
			$(this).multiselect({
				allSelectedText: 'Tudo',
				nonSelectedText: placeholder,
				nSelectedText: ' - selecionados',
				maxHeight: 200,
				numberDisplayed: 1,
				buttonClass: 'btn-multiselect',
				templates: {
					button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> <b class="caret special-caret"></b></button>',
				}
			});
		});
	}
	
	if ($('.home-link').length) {
		var i = 1;
		$('.home-link').each(function(){
			if (i > 4) {
				$(this).addClass('home-link-hidden');
				$(this).hide();
			}
			i++;
		});
		
		$('.home-links .btn-default').click(function(){
			$('.home-link-hidden').slideToggle();	
		});
	}
	
	/**
	 *  Carrossel */	
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',
		adaptiveHeight:true
	});
	
	$('.slider-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		variableWidth: true,
		arrows: true,
		centerMode: false,
		focusOnSelect: true,
		rows: 1,
		slidesPerRow : 4,
	});
	
	/**
	 *  Area Vip Modal */	
	$("#areaVip").modal();
	$("#areaVip").on('hide.bs.modal', function () { 
		document.location.href= $("#areaVip").attr('data-url');
	});
	
	/**
	 *  Lighbox Javascript */
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
				onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
				}
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });        

		// navigateTo
        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            var lb;
            return $(this).ekkoLightbox({
                onShown: function() {
                    lb = this;
					$(lb.modal_content).on('click', '.modal-footer a', function(e) {
						e.preventDefault();
						lb.navigateTo(2);
					});
                }
            });
        });
    });
    
    /**
     * Close box-red 
     */
	$("#close-box-red").click(function() {
		if ($("#box-red").hasClass('closed')) {
			$("#box-red").removeClass('closed');
			
			$("#box-red div").show();
			$("#box-red").animate({height:95});
			
			$("#close-box-red").css({transform: 'rotate(0deg)'});
			
		} else {
			$("#box-red").addClass('closed');
			
			$("#box-red div").slideToggle();
			$("#box-red").animate({height:51});
			
			$("#close-box-red").css({transform: 'rotate(180deg)'});
		}
	});
	
	/**
	 *  Código para modificar a cor da fonte do selectbox 
	 * 	após o usuário ter selecionado uma opção 
	 * */
	if ($('.top-search-form select').length) {
		function changeColor(element) {
			if($(element).val() == '' || $(element).val() == null) {				
				$(element).css({color: '#afafaf'});
				$(element).next().find('.multiselect-selected-text').css({color: '#afafaf'});
			} else {
				$(element).css({color: '#000'});
				$(element).next().find('.multiselect-selected-text').css({color: '#000'});				
			}
		}
		$('.top-search-form select').each(function() {
			changeColor(this);
		});
		
		$('.top-search-form select').change(function() {			
			changeColor(this);
		});		
	}
	
	function changeSelect(element){
		if(element == 'locacao') {
			$('.minValue').hide();
			$('.maxValue').hide();
			$('.minValue2').show();
			$('.maxValue2').show();
			$('#minValue option:first-child').prop('selected', true);
			$('#maxValue option:first-child').prop('selected', true);			
		} else {
			$('.minValue2').hide();
			$('.maxValue2').hide();
			$('.minValue').show();
			$('.maxValue').show();
			$('#minValue2 option:first-child').prop('selected', true);
			$('#maxValue2 option:first-child').prop('selected', true);		
		}
	}
	changeSelect($('#buy').val());
	$('#buy').change(function() {
		changeSelect($('#buy').val());		
	});
	
	$('form').submit(function(){
	    $(this).find('input[name], select[name]').each(function(){
	        if (!$(this).val()){
	            $(this).removeAttr('name');
	        }
	    });
	});	
	
	$(document).ready(function(){
		$(document).bind("contextmenu",function(e){
			return false;
		});
	});

})(jQuery);