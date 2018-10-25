<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function afflifiate_theme_widgets_init() {

//All Left Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Page Left Widget', 'afflifiate-theme' ),
		'id'            => 'page-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Blog Left Widget', 'afflifiate-theme' ),
		'id'            => 'blog-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Post Left Widget', 'afflifiate-theme' ),
		'id'            => 'post-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Category Left Widget', 'afflifiate-theme' ),
		'id'            => 'category-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Archive Left Widget', 'afflifiate-theme' ),
		'id'            => 'archive-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Search Left Widget', 'afflifiate-theme' ),
		'id'            => 'search-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Error Left Widget', 'afflifiate-theme' ),
		'id'            => 'error-left-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


//All Right Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Page Right Widget', 'afflifiate-theme' ),
		'id'            => 'page-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Blog Right Widget', 'afflifiate-theme' ),
		'id'            => 'blog-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Post Right Widget', 'afflifiate-theme' ),
		'id'            => 'post-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Category Right Widget', 'afflifiate-theme' ),
		'id'            => 'category-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Archive Right Widget', 'afflifiate-theme' ),
		'id'            => 'archive-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Search Right Widget', 'afflifiate-theme' ),
		'id'            => 'search-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Error Right Widget', 'afflifiate-theme' ),
		'id'            => 'error-right-widget',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



//Footer Top Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Page Widget', 'afflifiate-theme' ),
		'id'            => 'footer-top-page',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Blog Widget', 'afflifiate-theme' ),
		'id'            => 'footer-top-blog',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	  register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Single Widget', 'afflifiate-theme' ),
		'id'            => 'footer-top-single',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Category Widget', 'afflifiate-theme' ),
		'id'            => 'footer-top-category',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Other Widget', 'afflifiate-theme' ),
		'id'            => 'footer-top-other',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


//Footer Bottom Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Page Widget', 'afflifiate-theme' ),
		'id'            => 'footer-bottom-page',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Blog Widget', 'afflifiate-theme' ),
		'id'            => 'footer-bottom-blog',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	  register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Single Widget', 'afflifiate-theme' ),
		'id'            => 'footer-bottom-single',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Category Widget', 'afflifiate-theme' ),
		'id'            => 'footer-bottom-category',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom Other Widget', 'afflifiate-theme' ),
		'id'            => 'footer-bottom-other',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'afflifiate_theme_widgets_init' );