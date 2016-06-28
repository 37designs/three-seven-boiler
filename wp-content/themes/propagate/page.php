
	<?php get_header(); ?>

	<div class="container">

		<section id="primary" class="row content-area">

			<main id="main" class="col-lg-8 site-main" role="main">

	            <a name="content-jump" id="content-jump"></a> <!--skip to link-->

	            <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

	            <?php endwhile; // end of the loop. ?>

	        </main><!-- /#main -->

        <?php get_sidebar(); ?>

    </section><!-- /#primary -->

</div> <!--/.container-->

<?php get_footer(); ?>
