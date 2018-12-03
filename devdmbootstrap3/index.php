<?php include(locate_template('header.php')); // desse modo é possível passar variáveis ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="dmbs-content content">
	<?php include(locate_template('template-part-topsearch.php')); ?>
	<div class="container">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
		    &gt; 
		    <span property="itemListElement" typeof="ListItem">
		    	<span property="name">Blog</span>				
		    </span>
		</div>   
	
	    <div class="col-md-12 dmbs-main">	
	        <?php	
	            //if this was a search we display a page header with the results count. If there were no results we display the search form.
	            if (is_search()) :	
	                 $total_results = $wp_query->found_posts;	
	                 echo "<h2 class='page-header'>" . sprintf( __('%s Search Results for "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";	
	                 if ($total_results == 0) :
	                     get_search_form(true);
	                 endif;				
				else:	
					if (have_posts() && !is_single()) : ?>
						
						<h2 class="page-header"><?php echo is_category() ? single_cat_title( null, FALSE ) : 'Blog'; ?></h2>
						<?php get_sidebar( 'left' ); ?>
	                    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?>">						
					<?php endif;
				endif;
	        ?>	
	            <?php // theloop
	                if ( have_posts() ) : while ( have_posts() ) : the_post();	
	                    // single post
	                    if ( is_single() && !in_category('6, 4')) : ?>	
	                        <div <?php post_class(); ?>>
	                        	<?php $profissionalCode = get_field('code'); ?>                       		
	                            <h2 class="page-header"><?php echo $profissionalCode ? 'Profissional ' : ''; the_title() ;?></h2>	                            
	    						<?php get_sidebar( 'left' ); ?>
	    						<div class="col-md-<?php devdmbootstrap3_main_content_width(); ?>">
								<?php if($profissionalCode) : ?>									
									<div class="col-sm-4">	                            	
	                           <?php endif; ?>
	                           <?php if ( has_post_thumbnail() ) : ?>
	                                <?php the_post_thumbnail(); ?>	                                
	                            <?php endif; ?>
		                        <?php if($profissionalCode) : ?>
		                        	</div>
		                        	<div class="col-sm-8">
										<p><span class="strong red">Código:</span> #<?php the_field('code'); ?> <br />
		                            	<span class="strong red">Telefone:</span> <?php the_field('phone'); ?><br />
		                            	<?php if(get_field('email')) : ?>
		                            		<span class="strong red">E-mail:</span> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br />
										<?php endif; ?> 
										<?php if(get_field('creci')) : ?>
		                            		<span class="strong red">CRECI:</span> <?php the_field('creci'); ?><br />
										<?php endif; ?> 
										</p>
									</div>
									<div class="clearfix"></div>
		                        <?php endif; ?>  
		                        <div class="clearfix"></div>  
								<?php the_content(); ?>
								<?php get_template_part( 'template-part', 'share-icons' )?>
	                            <?php wp_link_pages(); ?>
								<?php get_template_part('template-part', 'postmeta'); ?>
	                            <?php comments_template(); ?>	                                                   

	                           </div>
							   <?php get_sidebar( 'right' ); ?>
	                        </div>
	                    <?php
	                    // list of posts
	                    else: ?>                    	

	                    	<?php if (!in_category(array(6, 4))) : ?>
		                       <div <?php post_class(); ?>>	
		                       		<?php $profissionalCode = get_field('code'); ?>
		                       		<h3 class="page-header">
		                                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo $profissionalCode ? 'Profissional ' : ''; the_title(); ?></a>
		                            </h3>
		                            <?php if($profissionalCode) : ?>									
										<div class="col-sm-4">	                            	
		                           <?php endif; ?>
		                           <?php if ( has_post_thumbnail() ) : ?>
		                                <?php the_post_thumbnail(); ?>	                                
		                            <?php endif; ?>
			                        <?php if($profissionalCode) : ?>
			                        	</div>
			                        	<div class="col-sm-8">
											<p><span class="strong red">Código:</span> #<?php the_field('code'); ?> <br />
			                            	<span class="strong red">Telefone:</span> <?php the_field('phone'); ?><br />
			                            	<?php if(get_field('email')) : ?>
			                            		<span class="strong red">E-mail:</span> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br />
											<?php endif; ?> 
											<?php if(get_field('creci')) : ?>
			                            		<span class="strong red">CRECI:</span> <?php the_field('creci'); ?><br />
											<?php endif; ?> 
											</p>
										</div>
										<div class="clearfix"></div>
			                        <?php endif; ?>  
			                        <div class="clearfix"></div>
		                            <?php the_content(); ?>
		                            <?php wp_link_pages(); ?>
		                            <?php get_template_part('template-part', 'postmeta'); ?>
		                            <?php  if ( comments_open() ) : ?>
		                                   <div class="clear"></div>
		                                  <p class="text-right">
		                                      <a class="btn-default " href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
		                                  </p>
		                            <?php endif; ?>
		                   		</div>
	                   		<?php  endif; ?>	                   		
		                <div class="clearfix"></div>
	                     <?php  endif; ?>
	
					<?php endwhile; ?>
					<?php //Paginação ?>
					<div class="pagination-page" style="text-align: center">
						<?php if (!function_exists('post_pagination')) :
							global $wp_query;
							$pager = 999999999; // need an unlikely integer

							echo paginate_links(array(
								'base' => str_replace($pager, '%#%', esc_url(get_pagenum_link($pager))),
								'format' => '?paged=%#%',
								'current' => max(1, get_query_var('paged')),
								'total' => $wp_query->max_num_pages,
							));
						endif; ?>
					</div>
	                <?php if (have_posts() && !is_single()) : ?>	                   		
	                    </div>
						<?php get_sidebar( 'right' ); ?>
					<?php  endif; ?>
					<?php //posts_nav_link(); 

					?>
	                <?php else: ?>
	
	                    <?php get_404_template(); ?>
	
	            <?php endif; ?>	
	   </div>	   
	</div>
</div>
<!-- end content container -->

<?php get_footer(); ?>
