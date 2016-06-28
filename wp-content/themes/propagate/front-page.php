<?php
/**
 * The Front page template.
 * @package 3.7 Boiler
 */

get_header(); ?>
<div class="container">
    <div id="primary" class="row content-area">
        <main id="main" class="site-main col-lg-12" role="main">

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php threeseven_boiler_paging_nav(); ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

        </main>

    </div> <!-- end #primary -->
</div>
<?php
get_footer();
