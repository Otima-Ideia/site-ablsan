<?php
function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url('https://www.otimaideia.com.br/wp-content/uploads/2020/05/logo.png');
            background-size: auto;
            width: auto;
            height: 70px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

function theme_css()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap2', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    /*wp_enqueue_style('bootstrap-stuffs', get_template_directory_uri() . '/assets/css/bootstrap-stuffs.css');*/
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', '', false, 'screen');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
}
add_action('wp_enqueue_scripts', 'theme_css');


function twentytwelve_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'twentytwelve_setup');
function wpdocs_get_paginated_links( $query ) {
	// When we're on page 1, 'paged' is 0, but we're counting from 1,
	// so we're using max() to get 1 instead of 0
	$currentPage = max( 1, get_query_var( 'paged', 1 ) );

	// This creates an array with all available page numbers, if there
	// is only *one* page, max_num_pages will return 0, so here we also
	// use the max() function to make sure we'll always get 1
	$pages = range( 1, max( 1, $query->max_num_pages ) );

	// Now, map over $pages and return the page number, the url to that
	// page and a boolean indicating whether that number is the current page
	return array_map( function( $page ) use ( $currentPage ) {
		return ( object ) array(
			"isCurrent" => $page == $currentPage,
			"page" => $page,
			"url" => get_pagenum_link( $page )
		);
	}, $pages );
}
add_action("wp_enqueue_scripts","wpdocs_get_paginated_links");