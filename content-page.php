<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 3.7 Boiler
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <footer class="entry-footer">
        <?php edit_post_link( __( 'Edit', 'threeseven_boiler' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-##-->
