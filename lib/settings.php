<?php

function threeseven_theme_setup() { 

	// don't organize uploads by year and month
	update_option('uploads_use_yearmonth_folders', 0);
	update_option('upload_path', 'assets');

	add_theme_support( 'menus' );
	register_nav_menus(
		array(
		  'main_navigation' 		=> 		'Main Navigation',
		  'utility_navigation' 		=> 		'Utility Navigation',
		  'footer_navigation' 		=> 		'Footer Navigation',
		  'sitemap_navigation'		=> 		'Sitemap Navigation',
		  'mobile_navigation'		=>		'Mobile Navigation'
	  )
	);
	
	add_theme_support( 'custom-background' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_editor_style('editor-style.css');
	
	if ( ! isset( $content_width ) ) {
		$content_width = 840; /* pixels */
	}

	// Add Theme Support for HTML5 markup
	
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	add_post_type_support( 'page', 'excerpt' );

}
add_action('after_setup_theme','threeseven_theme_setup');

// =====================
// = Custom Login Logo =
// =====================

function threeseven_login_logo() { ?>
    <style type="text/css">
        /* Login Image - Adjust Heignt, Background Color */
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/login-logo.png)!important;
            -webkit-background-size:cover!important;
            background-size:80%!important;
            height: 50px!important;
            width: auto!important;
            background-color: transparent;
            background-position: center center!important;
        }
        /* Login Button */
        .wp-core-ui .button-primary {
		}
		/* Login Button Active */
		.wp-core-ui .button-primary:active{
		}
		/* Login Button Focus */
		.wp-core-ui .button-primary:focus {
		}
		/* Login Input Focus */
		input[type=text]:focus, input[type=search]:focus, input[type=radio]:focus, input[type=tel]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, input[type=password]:focus, input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime]:focus, input[type=datetime-local]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, select:focus, textarea:focus{
		}
		/* Login Link Hover */
		.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'threeseven_login_logo' );

function threeseven_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'threeseven_login_logo_url' );

function threeseven_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter( 'login_headertitle', 'threeseven_login_logo_url_title' );





// ===================
// = Custom Branding =
// ===================

function modify_footer_admin () {
  echo 'Created by <a href="http://3.7designs.co">3.7 DESIGNS</a>.';
  echo 'Powered by <a href="http://WordPress.org">WordPress</a>.';
}

add_filter('admin_footer_text', 'modify_footer_admin');

add_action('do_robots', 'roots_robots');

function roots_robots() {
	echo "Disallow: /cgi-bin\n";
	echo "Disallow: /wp-admin\n";
	echo "Disallow: /wp-includes\n";
	echo "Disallow: /wp-content/plugins\n";
	echo "Disallow: /plugins\n";
	echo "Disallow: /wp-content/cache\n";
	echo "Disallow: /wp-content/themes\n";
	echo "Disallow: /trackback\n";
	echo "Disallow: /feed\n";
	echo "Disallow: /comments\n";
	echo "Disallow: /category/*/*\n";
	echo "Disallow: */trackback\n";
	echo "Disallow: */feed\n";
	echo "Disallow: */comments\n";
	echo "Disallow: /*?*\n";
	echo "Disallow: /*?\n";
	echo "Allow: /wp-content/uploads\n";
	echo "Allow: /assets";
}

add_action('wp_dashboard_setup', 'threeseven_dashboard_widgets');

function threeseven_dashboard_widgets() {

     global $wp_meta_boxes;

     // add a custom dashboard widget
     wp_add_dashboard_widget( 'dashboard_custom_feed', 'News from 3.7 DESIGNS', 'dashboard_custom_feed_output' ); //add new RSS feed output
}

function dashboard_custom_feed_output() {
     echo '<div class="rss-widget">';
     wp_widget_rss_output(array(
          'url' => 'http://feeds.feedburner.com/AnnArborWebDesignBlog-AnnArborWebDesignIdeas',
          'title' => 'Web Design News From 3.7 DESIGNS',
          'items' => 3,
          'show_summary' => 1,
          'show_author' => 0,
          'show_date' => 1
     ));
     echo "</div>";
}

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function threeseven_boiler_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }

    global $page, $paged;

    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', 'threeseven_boiler' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'threeseven_boiler_wp_title', 10, 2 );

?>