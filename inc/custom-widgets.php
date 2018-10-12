<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thenobility_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'thenobility' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'thenobility' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    //footer Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'thenobility' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add information, logo, your address.', 'thenobility' ),
		'before_widget' => '<div class="top-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 //footer Widget 2
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'thenobility' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer widget Style2 here.', 'thenobility' ),
		'before_widget' => '<div class="footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    
     //footer Widget 3
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'thenobility' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add newasletter.', 'thenobility' ),
		'before_widget' => '<div class="top-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'thenobility_widgets_init' );