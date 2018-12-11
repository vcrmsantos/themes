<?php
/* Template Name: Midia */
get_header();
get_template_part('inc/banner');

$image_directory = get_stylesheet_directory_uri().'/assets/img/';
$image_directory_teste = get_template_directory_uri().'/assets/img/';
?>
<style>
.modal-body {
    margin: 0 auto;
}
</style>
    <section id="midia-section2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <?php echo do_shortcode('[breadcrumb]'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <?php get_template_part('inc/menu-inside-arboreal'); ?>
                </div>
            </div>
          
            <h2 class="title-arboreal text-center"><?php the_title(); ?></h2>
            <div class="midia-title__sub text-center">Revistas impressas</div>

            <div class="row">
                    <?php
                    $list = glob("wp-content/themes/arboreal/assets/img/revistas/*.*");
                        foreach ($list as $l) : ?>
                    <div class="col-sm-3 col-xs-12 profile">
				        <div class="panel panel-default">
				          <div class="panel-thumbnail">
				          	<a href="<?php echo $l; ?>" class="thumb">
				          		<img src="<?php echo $l; ?>" alt="<?php echo ucwords(pathinfo(basename($l), PATHINFO_FILENAME)); ?>" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
				          	</a>
				          </div>
				        </div>
				    </div>
                    <?php endforeach; ?>
            
            </div>

            <div class="midia-title__sub text-center">Sites | Blogs | Influences</div>

            <div class="row">
                    <?php
                    $list = glob("wp-content/themes/arboreal/assets/img/influences/*.*");
                        foreach ($list as $l) : ?>
                        <div class="col-sm-3 col-xs-12 profile">
                            <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="<?php echo $l; ?>" class="thumb">
                                    <img src="<?php echo $l; ?>" alt="<?php echo ucwords(pathinfo(basename($l), PATHINFO_FILENAME)); ?>" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                </a>
                            </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

            </div>


            <!-- .modal-profile -->
	        <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                            <h3 class="modal-title"></h3>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
		    </div>
	    <!-- /.modal-profile -->

        
            <div class="solicitar-orcamento">
                <div class="text">Solicite uma cotação de outra peça que não encontrou.<br>
                    Qualquer duvida, fale conosco, Temos o prazer em lhe ajudar.
                </div>
                <a class="btn-arboreal-light">SOLICITAR UM ORÇAMENTO</a>
            </div>
       
       
        </div>
     


    </section>
    <?php get_footer(); ?>

    <script>
    jQuery(document).ready(function() {
        jQuery('.midia-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        jQuery('.midia-btn-one-next').click(function () {
            jQuery('.midia-carousel').trigger('next.owl.carousel', 500);
        });
        jQuery('.midia-btn-one-prev').click(function () {
            jQuery('.midia-carousel').trigger('prev.owl.carousel', 500);
        });

        jQuery('.midia-carousel-two').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        jQuery('.midia-btn-two-prev').click(function () {
            jQuery('.midia-carousel-two').trigger('prev.owl.carousel', 500);
        });
        jQuery('.midia-btn-two-next').click(function () {
            jQuery('.midia-carousel-two').trigger('next.owl.carousel', 500);
        });


            jQuery(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                jQuery(this).ekkoLightbox();
            });



/* show lightbox when clicking a thumbnail */
    jQuery('a.thumb').click(function(event){
    	event.preventDefault();
    	var content = jQuery('.modal-body');
    	content.empty();
      	var title = jQuery(this).attr("title");
      	jQuery('.modal-title').html(title);      	
      	content.html(jQuery(this).html());
      	jQuery(".modal-profile").modal({show:true});
    });

  });

    </script>
