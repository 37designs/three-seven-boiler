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

            <?php
			while ( have_posts() ) : the_post();

                get_template_part( 'content', get_post_format() );

                get_template_part( 'template-parts/post-navigation');

                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // end of the loop.
			?>

        </main>

        <?php get_sidebar( 'blog' ); ?>

    </section>

</div>
<?php
get_footer();
