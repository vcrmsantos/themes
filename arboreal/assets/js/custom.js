jQuery(document).ready(function () {
    jQuery('#home-products-categories').on('click', 'li', function () {
        jQuery('#home-products-categories li').removeClass('active');
        jQuery(this).addClass('active');
    });
    jQuery("#down-wrap").click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery("#banner-section").next('section').offset().top - 200},
                'fast');
    });

    jQuery("#instagram-carousel").owlCarousel({
        margin: 0,
        loop: true,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 4000, //seconds
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 5
            },
            1000: {
                items: 7
            }
        }
    });
});

jQuery(function () {
    var lastScrollTop = 0;
    var row1 = jQuery('#header_menu_top_row1');
    var row2 = jQuery('#header_menu_top_row2');
    var sub = jQuery('#header_submenu_produtos_padrao');
    var sub_produtos = jQuery('#header_submenu_produtos');
    var width = jQuery(window).width();

    jQuery(window).scroll(function (event) {
        if (width > 767) {
            var st = jQuery(this).scrollTop();
            if (st > lastScrollTop) {
                row1.find('.logo').addClass('down-logo');
                row2.find('.menu-menu-principal-container').addClass('menu-go-left');
                row2.find('.menu-menu-principal-parte-2-container').addClass('menu-go-right');
                row1.addClass('row-go-up');
                row2.addClass('row-go-up');
                sub.addClass('row-go-up');
                sub_produtos.addClass('row-go-up');
                //style
                row1.css("background-color", "#fff");
                row2.css("background-color", "#fff");
                sub.css("background-color", "#fff");
                sub_produtos.css("background-color", "#fff");


                //links
                jQuery('.logo_imgae').hide();
                jQuery('.logo_imgae_color').show();
                
                jQuery('#menu-menu-principal li a').css("color", "#191919");
                jQuery('#menu-menu-principal li a').hover(function () {
                    jQuery(this).css("color", "#B5ADA6");
                }, function () {
                    jQuery(this).css("color", "#191919");
                });
                jQuery('#menu-a-arboreal li a').css("color", "#191919");
                jQuery('#menu-a-arboreal li a').hover(function () {
                    jQuery(this).css("color", "#B5ADA6");
                }, function () {
                    jQuery(this).css("color", "#191919");
                });
                jQuery('#menu-menu-principal-parte-2 li a').css("color", "#191919");
                jQuery('#menu-menu-principal-parte-2 li a').hover(function () {
                    jQuery(this).css("color", "#B5ADA6");
                }, function () {
                    jQuery(this).css("color", "#191919");
                });
                jQuery('#menu-produtos li a').css("color", "#191919");
                jQuery('#menu-produtos li a').hover(function () {
                    jQuery(this).css("color", "#B5ADA6");
                }, function () {
                    jQuery(this).css("color", "#191919");
                });
            } else {
                if (jQuery(window).scrollTop() === 0) {
                    jQuery('.logo_imgae_color').hide();
                    jQuery('.logo_imgae').show();
                    
                    row1.find('.logo').removeClass('down-logo');
                    row2.find('.menu-menu-principal-container').removeClass('menu-go-left');
                    row2.find('.menu-menu-principal-parte-2-container').removeClass('menu-go-right');
                    row1.removeClass('row-go-up');
                    row2.removeClass('row-go-up');
                    sub.removeClass('row-go-up');
                    sub_produtos.removeClass('row-go-up');
                    //style
                    row1.removeAttr('style');
                    row2.removeAttr('style');
                    sub.removeAttr('style');
                    sub_produtos.removeAttr('style');
                    jQuery('#menu-menu-principal li a').removeAttr('style').unbind("hover");
                    jQuery('#menu-a-arboreal li a').removeAttr('style').unbind("hover");
                    jQuery('#menu-menu-principal-parte-2 li a').removeAttr('style').unbind("hover");
                    jQuery('#menu-produtos li a').removeAttr('style').unbind("hover");
                }
            }

            lastScrollTop = st;
        }
    });
    jQuery('#menu-item-46').hover(
            function () {
                sub.slideDown('fast');
            },
            function () {
                if (!sub.is(":hover")) {
                    sub.slideUp('fast');
                }
            }
    );
    sub.hover(
            function () {
                //sub.show();
            },
            function () {
                sub.slideUp('fast');
            }
    );

    jQuery('#menu-item-130').hover(
            function () {
                sub_produtos.slideDown('fast');
            },
            function () {
                if (!sub_produtos.is(":hover")) {
                    sub_produtos.slideUp('fast');
                }
            }
    );
    sub_produtos.hover(
            function () {
                //sub.show();
            },
            function () {
                sub_produtos.slideUp('fast');
            }
    );
});

