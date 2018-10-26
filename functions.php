<?php
/**
 * afflifiate theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package afflifiate_theme
 */

if ( ! function_exists( 'afflifiate_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function afflifiate_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on afflifiate theme, use a find and replace
		 * to change 'afflifiate-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'afflifiate-theme', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header_menu' => esc_html__( 'Header Menu', 'afflifiate-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'afflifiate_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 500,
		) );
	}
endif;
add_action( 'after_setup_theme', 'afflifiate_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function afflifiate_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'afflifiate_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'afflifiate_theme_content_width', 0 );

//Blog page pagination
if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '&laquo;', 'afflifiate-theme' ),
    'next_text' => __( '&raquo', 'afflifiate-theme' ),
) );
   }
endif;

function afflifiate_theme_move_comment_field_to_bottom( $fields ) {	
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'afflifiate_theme_move_comment_field_to_bottom' );

//Excerpt Count Option
function custom_short_excerpt($excerpt){
	return substr($excerpt, 0, 200);
}
add_filter('the_excerpt', 'custom_short_excerpt');

/**
 * Implement the Custom Header feature.
 */
include_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
include_once get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
include_once get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
include_once get_template_directory() . '/inc/customizer.php';

/**
 * Implement the Custom Widget feature.
 */
include_once (get_template_directory() . '/inc/custom-widgets.php');

/**
 * Implement All CSS and JS.
 */
include_once (get_template_directory() . '/inc/enqueue.php');

/**
 * Implement Dropdown Menu.
 */
include_once (get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php');

/**
 * Themeoptions and metabox functions.
 */
include_once (get_template_directory().'/inc/theme-metabox-and-options.php');

//Woocommerce Development

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 2; // 2 products per row
	}
}


/**
 * Google recaptcha add before the submit button
 */
function add_google_recaptcha($submit_field) {
    $submit_field['submit_field'] = '<div class="g-recaptcha" data-sitekey="6LfNEXcUAAAAADQfk9Rn0KpQ6B4CXWGmb84Pod-Q"></div><br>' . $submit_field['submit_field'];
    return $submit_field;
}
if (!is_user_logged_in()) {
    add_filter('comment_form_defaults','add_google_recaptcha');
}
 
/**
 * Google recaptcha check, validate and catch the spammer
 */
function is_valid_captcha($captcha) {
$captcha_postdata = http_build_query(array(
                            'secret' => '6LfNEXcUAAAAABCI_L3rMDH6kDDZsTe6Vtl9L-Sn',
                            'response' => $captcha,
                            'remoteip' => $_SERVER['REMOTE_ADDR']));
$captcha_opts = array('http' => array(
                      'method'  => 'POST',
                      'header'  => 'Content-type: application/x-www-form-urlencoded',
                      'content' => $captcha_postdata));
$captcha_context  = stream_context_create($captcha_opts);
$captcha_response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify" , false , $captcha_context), true);
if ($captcha_response['success'])
    return true;
else
    return false;
}
 
function verify_google_recaptcha() {
$recaptcha = $_POST['g-recaptcha-response'];
if (empty($recaptcha))
    wp_die( __("<b>ERROR:</b> please select <b>I'm not a robot!</b><p><a href='javascript:history.back()'>« Back</a></p>"));
else if (!is_valid_captcha($recaptcha))
    wp_die( __("<b>Go away SPAMMER!</b>"));
}
if (!is_user_logged_in()) {
    add_action('pre_comment_on_post', 'verify_google_recaptcha');
}