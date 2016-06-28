<?php
/**
 * The template for displaying search results pages.
 *
 * @package 3.7 Boiler
 */

get_header(); ?>
<div class="containter">
	<section id="primary" class="row content-area">
	    <main id="main" class="col-lg-7 site-main" role="main">
	
	        <?php if ( have_posts() ) : ?>
	
	            <header class="page-header">
	                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'threeseven_boiler' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	            </header><!-- .page-header -->
	
	            <?php /* Start the Loop */ ?>
	            <?php while ( have_posts() ) : the_post(); ?>
	
	                <?php
	                /**
	                 * Run the loop for the search to output the results.
	                 * If you want to overload this in a child theme then include a file
	                 * called content-search.php and that will be used instead.
	                 */
	                get_template_part( 'content', 'search' );
	                ?>
	
	            <?php endwhile; ?>
	
	            <?php threeseven_boiler_paging_nav(); ?>
	
	        <?php else : ?>
	
	            <?php get_template_part( 'content', 'none' ); ?>
	
	        <?php endif; ?>
	
	    </main><!-- #main -->
	
	    <?php get_sidebar(); ?>
	
	</section><!-- #primary -->
</div>
<?php get_footer(); ?>
