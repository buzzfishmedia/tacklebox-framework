<?php

if( defined('WP_COMPOSER') and WP_COMPOSER == false ){
	require_once( get_template_directory() . '/src/Helpers/Theme.php' );
	require_once( get_template_directory() . '/src/Helpers/AddMenuPage.php' );
	require_once( get_template_directory() . '/src/Helpers/CustomPostType.php' );
}


// Initialize Theme Class
$tacklebox = new WordPress\Theme('tacklebox');

// Theme Setup
$setup = array(
	'theme_support' => array(
		'post-thumbnails' => "",
		'automatic-feed-links' => "",
		'custom-background' => "",
		'post-formats' => array( 'aside', 'image', 'video', 'quote', 'link' )
	),
	'nav_menus' => array(
		array( 'primary'	=>	__('Primary Menu', 'tacklebox') ),
		array( 'topbar'		=>	__('Top Bar', 'tacklebox') )
	)
);

$tacklebox->themeSetup($setup);

// Scripts and Styles
$scripts = array(
    array(
        'name' => 'default-style', //Required
        'type' => 'style', // Required
        'location' => get_template_directory_uri() . '/assets/css/main.css', // Required
        'method' => 'enqueue',
        'version' => '3.1.0'
    ),
    array(
        'name' => 'default-script', //Required
        'type' => 'script', // Required
        'location' => get_template_directory_uri() . '/assets/js/main.js', // Required
        'dependencies' => array('jquery-form', 'thickbox')
    ),
    array(
    	'name' => 'font-awesome',
    	'type' => 'style',
    	'location' => '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'
    )
);

// Only use these scripts if we using front-end;
if( ! is_admin() ){
	$tacklebox->loadScripts($scripts);
}

// Widgets
$widgets = array(
	
	array(
		'name' => __( 'Footer One', 'tacklebox' ),
		'id' => 'footer-1',
		'before_title' => '<h2 class="widget-title">',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	),
	array(
		'name' => __( 'Footer Two', 'tacklebox' ),
		'id' => 'footer-2',
		'before_title' => '<h2 class="widget-title">',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	),
	array(
		'name' => __( 'Footer Three', 'tacklebox' ),
		'id' => 'footer-3',
		'before_title' => '<h2 class="widget-title">',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	),
	array(
		'name' => __( 'Sidebar', 'tacklebox' ),
		'id' => 'sidebar-1',
		'before_title' => '<h2 class="widget-title">',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	)

);
$tacklebox->addWidgets($widgets);

// Custom Header
//require_once( get_template_directory() . '/inc/custom-header.php' );

require_once( get_template_directory().'/vendor/autoload.php' );


/**
 * Create Page for Composer
 */

$page = array( 'parent_slug' => 'tools.php' );
$sections = array(
	array('title' => 'Section 1'),
	array('title' => 'Section 2')

);
$fields = array(
	array(
		'title' => 'Field 1',
		'type' => 'text',
		'section' => 'Section 1'
	),
	array(
		'title' => 'Field 2',
		'type' => 'text',
		'section' => 'Section 2'
	)
);

$composerpage = new WordPress\AddMenuPage("Get Composer", $page );
$composerpage->setSections($sections);
$composerpage->setFields($fields);


