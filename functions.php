<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

// LOAD GES CORE (if you remove this, the theme will break)
require_once( 'library/ges.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
/*
function ges_login_css() {
	wp_enqueue_style( 'ges_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function ges_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function ges_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'ges_login_css', 10 );
add_filter( 'login_headerurl', 'ges_login_url' );
add_filter( 'login_headertitle', 'ges_login_title' );
*/
// require_once( 'library/admin.php' );

/*********************
LAUNCH GES
Let's get everything up and running.
*********************/

function ges_ahoy() {

  // let's get language support going, if you need it
  load_theme_textdomain( 'gestheme', get_template_directory() . '/library/translation' );
  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
//   require_once( 'library/custom-post-type.php' );
  // launching operation cleanup
  add_action( 'init', 'ges_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'ges_gallery_style' );
  // launching this stuff after theme setup
  ges_theme_support();
  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'ges_register_sidebars' );
  // cleaning up random code around images
  add_filter( 'the_content', 'ges_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'ges_excerpt_more' );

} /* end ges ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'ges_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'ges-thumb-600', 600, 150, true );
add_image_size( 'ges-thumb-300', 300, 100, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'ges-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'ges-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'ges_custom_image_sizes' );

function ges_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'ges-thumb-600' => __('600px by 150px'),
        'ges-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/

function ges_theme_customizer($wp_customize) {
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections 

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');
  
  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action( 'customize_register', 'ges_theme_customizer' );

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function ges_register_sidebars() {
    /*
    register_sidebar(array(
		'id' => 'page-sidebar',
		'name' => __( 'Page Sidebar', 'gestheme' ),
		'description' => __( 'The page\'s sidebar.', 'gestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	*/

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'gestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'gestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* REMOVE 'COMMENTS' FROM ADMIN BAR *********************/

add_action( 'admin_menu', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
    remove_menu_page('edit-comments.php');  
}

?>
