<section class="home-blog">
    <div class="container">
        <div class="row">
        <?php

        global $post;
        $args = array( 'posts_per_page' => 4 );
        $i = 0;
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); 
            
        if ( $i == 0 ) {
            $col_blog = 6;
        } elseif ( $i == 1 ) {
            $col_blog = 3;
        } else {
            $col_blog = 3;
        }
        echo $i != 3 ? '<div class="col-md-' . $col_blog . '">' : '';
            ?>
            <div class="home-blog__post">
            <a href="<?php the_permalink(); ?>">
            <?php
            // Must be inside a loop.
            
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            else {
                $image_fix = $i < 2 ? ' image-fix' : ' image-fix image-fix--small';
                $margin = $i == 2 ? 'style="margin-bottom:10px;"' : '';
                echo '<img class="img-responsive' . $image_fix . '" src="' . get_bloginfo( 'stylesheet_directory' ) 
                    . '/images/placeholder-blog/placeholder-blog-' . $i . '.png" ' . $margin . '/>';
            }
            $content = strip_tags(get_the_content());
            $content = $i == 0 ? substr( $content, 0, 100 ) : substr( $content, 0, 35 );
            ?>
            </a>
            <div class="home-blog__content">
                <div class="home-blog__title"><?php the_title(); ?></div>
                <div class="home-blog__desc"><?php echo $i == 0 ? $content . '...' : ''; ?>
                <a href="<?php the_permalink(); ?>" class="home-blog__read-more">Ler Matéria</a>
                </div>
            </div>
            </div>
        <?php 
        echo $i != 2 ? '</div>' : '';
        $i++; 
        endforeach; 
        wp_reset_postdata();
        ?>
        </div>
    </div>
</section>


<style>
.home-blog {
    padding: 30px;
}

.home-blog .row>[class*="col-"] {
    padding: 5px;
}

.home-blog .image-fix {
    height: 370px;
    width: 100%;
}

.home-blog .image-fix--small {
    height: 180px;
}

.home-blog__post {
    position: relative;
}

.home-blog__content {
    padding: 20px;
    color: black;
    position: absolute;
    bottom: 0;
    background: rgba(255, 255, 255, 0.7);
    width: 100%;
}

.home-blog__title {
    font-size: 17px;
    font-weight: bold;
    margin-bottom: 20px;
}

.home-blog__read-more {
    color: red;
    text-transform: uppercase;
    font-weight: bold;
}


</style>