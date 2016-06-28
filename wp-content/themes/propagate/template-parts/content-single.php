<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
            <?php threeseven_boiler_posted_on(); ?>
        </div><!-- .entry-meta -->

    </header>
    <div class="entry-content">

        <?php the_content(); ?>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'threeseven_boiler' ),
            'after'  => '</div>',
        ) );
        ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        
        <?php
        /* translators: used between list items, there is a space after the comma */
        $category_list = get_the_category_list( __( ', ', 'threeseven_boiler' ) );

        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', __( ', ', 'threeseven_boiler' ) );

        if ( ! threeseven_boiler_categorized_blog() ) {
            // This blog only has 1 category so we just need to worry about tags in the meta text
            if ( '' != $tag_list ) {
                $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'threeseven_boiler' );
            } else {
                $meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'threeseven_boiler' );
            }
        } else {
            // But this blog has loads of categories so we should probably display them here
            if ( '' != $tag_list ) {
                $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'threeseven_boiler' );
            } else {
                $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'threeseven_boiler' );
            }
        } // end check for categories on this blog

        printf(
            $meta_text,
            $category_list,
            $tag_list,
            get_permalink()
        );
        ?>

        <?php edit_post_link( __( 'Edit', 'threeseven_boiler' ), '<span class="edit-link">', '</span>' ); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
