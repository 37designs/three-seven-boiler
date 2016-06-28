	
	<?php

    /**
     * The template for displaying all single posts.
     *
     * @package 3.7 Boiler
     */

    get_header(); ?>

	<div class="container">
	
		<section id="primary" class="row" role="main">
	        <main id="main" class="site-main col-lg-7" role="main">
	
	            <?php while ( have_posts() ) : the_post(); ?>
	
	                <?php get_template_part( 'content', 'single' ); ?>
	
	                <?php get_template_part( 'modules/post-navigation'); ?>
	
	                <?php
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() ) :
	                    comments_template();
	                endif;
	                ?>
	
	            <?php endwhile; // end of the loop. ?>
	
	        </main>
	
	        <?php get_sidebar('blog'); ?>
	
	    </section>

	</div>
	<?php get_footer(); ?>