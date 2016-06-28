<?php if( has_nav_menu( 'mobile_navigation' ) ): ?>
    <nav id="mobile-navigation" role="navigation" class="clearfix">
        <?php
        $args = array(
                'theme_location'    =>  'main_navigation',
                'container'         =>  '',
                'menu_id'           =>  'mobile_navigation',
                'menu_class'        =>  'group'
        );
        wp_nav_menu( $args ); ?>
    </nav>
<?php endif;
