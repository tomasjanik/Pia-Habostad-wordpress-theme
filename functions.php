<?php
/**
 * piahabostad2015 functions and definitions
 *
 * @package piahabostad2015
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'piahabostad2015_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function piahabostad2015_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on piahabostad2015, use a find and replace
	 * to change 'piahabostad2015' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'piahabostad2015', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'piahabostad2015_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // piahabostad2015_setup
add_action( 'after_setup_theme', 'piahabostad2015_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function piahabostad2015_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'piahabostad2015' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'piahabostad2015_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function piahabostad2015_scripts() {

	wp_enqueue_style( 'piahabostad2015-style', get_template_directory_uri() . '/assets/style/piahabostad.css', array(), true );
	wp_enqueue_script( 'piahabostad2015-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), true );
	wp_enqueue_script( 'piahabostad2015-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array('jquery'), true );
	wp_enqueue_script( 'piahabostad2015-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), true );
	wp_enqueue_script( 'piahabostad2015-instantclick', get_template_directory_uri() . '/assets/js/instantclick.min.js', array('jquery'), true );
	wp_enqueue_script( 'piahabostad2015-unveil', get_template_directory_uri() . '/assets/js/jquery.unveil.js', array('jquery'), true );
	wp_enqueue_script( 'piahabostad2015-js', get_template_directory_uri() . '/assets/js/piahabostad.js', array('jquery'), true );

}
add_action( 'wp_enqueue_scripts', 'piahabostad2015_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Post Type
function projects() {

	$labels = array(
		'name'                => _x( 'Prosjekter', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Prosjekt', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Prosjekter', 'text_domain' ),
		'parent_item_colon'   => __( 'Forelder', 'text_domain' ),
		'all_items'           => __( 'Alle prosjekter', 'text_domain' ),
		'view_item'           => __( 'Se prosjekt', 'text_domain' ),
		'add_new_item'        => __( 'Legg til nytt prosjekt', 'text_domain' ),
		'add_new'             => __( 'Nytt prosjekt', 'text_domain' ),
		'edit_item'           => __( 'Rediger prosjekt', 'text_domain' ),
		'update_item'         => __( 'Oppdater prosjekt', 'text_domain' ),
		'search_items'        => __( 'Søk i prosjekt', 'text_domain' ),
		'not_found'           => __( 'Ikke funnet', 'text_domain' ),
		'not_found_in_trash'  => __( 'Ikke funnet i papirkurv', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Prosjekter', 'text_domain' ),
		'description'         => __( 'Alle prosjekter', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'projects', $args );

}

// Hook into the 'init' action
add_action( 'init', 'projects', 0 );

// Add featured image option
add_theme_support( 'post-thumbnails' ); 

// Add custom menus

function navigation() {
  register_nav_menu('navigation',__( 'Navigation' ));
}
add_action( 'init', 'navigation' );

class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="col-xs-12 col-sm-4 '. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

      



            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
            }
}



/**
 * Hide editor on specific pages.
 *
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'About'){ 
    remove_post_type_support('page', 'editor');
  }

  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'my-page-template.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
