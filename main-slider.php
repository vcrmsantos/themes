<?php
/**
 * Template part for displaying main slider
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kylix
 */


/* Loop slides */
$sliders = array( //Pegando todos os custom posts de sliders
'posts_per_page' => -1,
'post_type' => 'slideshow',
); 

$slide = new WP_Query($sliders);
$i = $slide->found_posts;

?>
	<!-- Main Slider -->
	<section class="main-slider">
		<div class="container">
			<div class="row">
				<div class="swiper-container slide__banner">
					<div class="swiper-wrapper">
					<?php if ($slide->have_posts()) { ?>

					<?php while ($slide->have_posts()): $slide->the_post(); ?>
					<?php $meta = get_post_meta( get_the_ID() ); ?>
					<div class="swiper-slide swiper-slide--main" data-slider-id="<?php the_ID(); ?>" data-slider-title="<?php the_title(); ?>">
					<a href="<?php echo $meta["url"][0];?>" style="display:block; width: 100%;">
					<?php
					
						//the_post_thumbnail();

						/* if ( get_field('banner_mobile') ) {
							$banner_mobile = get_field('banner_mobile');
						} else {
							$banner_mobile = get_the_post_thumbnail_url();
						} */
					
						$banner_mobile = get_field('banner_mobile') ? get_field('banner_mobile') : get_the_post_thumbnail_url(); 

						/*$image = 0;
						foreach ($products as $_product ) {
							$_product = wc_get_product( $_product ); 
							$_productImage = get_the_post_thumbnail_url( $_product->get_id() );
							?>
							<div class="image-product image-product--<?php echo $image; ?>"><img src="<?php echo $_productImage ?>" alt="" srcset=""></div>
						<?php
						$image++;
						} */
					?>
					<img data-src-desktop="<?php echo get_the_post_thumbnail_url(); ?>" data-src-mobile="<?php echo $banner_mobile; ?>" alt="<?php the_title(); ?>">
					</a>
						<?php if ( !empty($meta["title"][0]) && !empty($meta["subtitle"][0]) ) {?>
							<div class="slider-title">
								<div class="main-title"><?php echo $meta["title"][0]; ?></div>
								<div class="main-subtitle"></div>
							</div>
							<div class="banner-subtitle"><?php echo $meta["subtitle"][0]; ?></div>
						<?php } ?>
						</div>
                    <?php endwhile; ?>
                <?php } //endif ?>
                <?php wp_reset_postdata(); ?>
					</div>
					 <!-- Add Arrows -->
					<div class="swiper-button-next slider-button--circle slider-button-next"></div>
                    <div class="swiper-button-prev slider-button--circle slider-button-prev"></div>
					<!-- Add Pagination -->
					<?php echo $i > 1 ? '<div class="swiper-pagination"></div>' : '';?>
				</div>
			</div>
		</div>
	</section>
	<!-- / Main Slider -->

<style>

@media only screen and (max-width: 768px) {
.swiper-pagination {
	position: relative;
}
.swiper-pagination-bullet {
	background-color: #8d0d57;
	margin: 35px 8px 0 8px !important;
}
}

.slider-button--circle {
	display: none;
}

	@media only screen and (min-width: 768px) {
		.slider-button--circle {
		display:block;
		background: none;
		font-size: 20px;
		font-weight: bold;
		color: white;
		/* border: 0; */
		width: 40px;
		height: 40px;
		text-align: center;
		padding: 5px;
		/* font-size: 20px; */
		/* line-height: 2.00; */
		border-radius: 30px;
		background: #8d0d57;
	}
}
</style>

<script>

var isMobile = {
Android: function() {
    return navigator.userAgent.match(/Android/i)
}
    , BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i)
    }
    , iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i)
    }
    , Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i)
    }
    , Windows: function() {
        return navigator.userAgent.match(/IEMobile/i)
    }
    , any: function() {
        return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()
    }
};
jQuery(function ($) {
    if (isMobile.any()) {
        for (i = 0; i < $("img[data-src-mobile]").length; i++)
            $("img[data-src-mobile]").eq(i).prop("src", $("img[data-src-mobile]").eq(i).data("src-mobile"));
    } else {
        for (i = 0; i < $("img[data-src-desktop]").length; i++) 
            $("img[data-src-desktop]").eq(i).prop("src", $("img[data-src-desktop]").eq(i).data("src-desktop"));
	} 
	
	}	);


</script>