<?php
/**
 * @package 3.7 Boiler
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php threeseven_boiler_posted_on(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
            __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'threeseven_boiler' ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );
        ?>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'threeseven_boiler' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'threeseven_boiler' ) );
            if ( $categories_list && threeseven_boiler_categorized_blog() ) :
                ?>
                <span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'threeseven_boiler' ), $categories_list ); ?>
			</span>
            <?php endif; // End if categories ?>

            <?php
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', __( ', ', 'threeseven_boiler' ) );
            if ( $tags_list ) :
                ?>
                <span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'threeseven_boiler' ), $tags_list ); ?>
			</span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>

        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'threeseven_boiler' ), __( '1 Comment', 'threeseven_boiler' ), __( '% Comments', 'threeseven_boiler' ) ); ?></span>
        <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'threeseven_boiler' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
