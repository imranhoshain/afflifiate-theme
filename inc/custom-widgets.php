<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function afflifiate_theme_widgets_init() {

	//Homepage left sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage left sidebar', 'afflifiate-theme' ),
		'id'            => 'home-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    //Post left sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Post left sidebar', 'afflifiate-theme' ),
		'id'            => 'post-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 //Page left sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Page left sidebar', 'afflifiate-theme' ),
		'id'            => 'page-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
     //Category left sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Category left sidebar', 'afflifiate-theme' ),
		'id'            => 'ctegory-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Error left sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Error left sidebar', 'afflifiate-theme' ),
		'id'            => 'error-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Search left sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Search left sidebar', 'afflifiate-theme' ),
		'id'            => 'search-left',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



	//Homepage right sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage right sidebar', 'afflifiate-theme' ),
		'id'            => 'home-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    //Post right sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Post right sidebar', 'afflifiate-theme' ),
		'id'            => 'post-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 //Page right sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Page right sidebar', 'afflifiate-theme' ),
		'id'            => 'page-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
     //Category right sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Category right sidebar', 'afflifiate-theme' ),
		'id'            => 'ctegory-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Error right sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Error right sidebar', 'afflifiate-theme' ),
		'id'            => 'error-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Search right sidebar
    register_sidebar( array(
		'name'          => esc_html__( 'Search right sidebar', 'afflifiate-theme' ),
		'id'            => 'search-right',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



    //Footer Top Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Home Top Footer', 'afflifiate-theme' ),
		'id'            => 'home-top-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    //Footer Top Widget
    register_sidebar( array(
		'name'          => esc_html__( 'Home Top Footer', 'afflifiate-theme' ),
		'id'            => 'home-top-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
		'name'          => esc_html__( 'Page Top Footer', 'afflifiate-theme' ),
		'id'            => 'page-top-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	  register_sidebar( array(
		'name'          => esc_html__( 'Post Top Footer', 'afflifiate-theme' ),
		'id'            => 'post-top-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Category Top Footer', 'afflifiate-theme' ),
		'id'            => 'category-top-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	//Footer Bottom Footer
    register_sidebar( array(
		'name'          => esc_html__( 'Home Bottom Footer', 'afflifiate-theme' ),
		'id'            => 'home-bottom-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	 register_sidebar( array(
		'name'          => esc_html__( 'Page Bottom Footer', 'afflifiate-theme' ),
		'id'            => 'page-bottom-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	  register_sidebar( array(
		'name'          => esc_html__( 'Post Bottom Footer', 'afflifiate-theme' ),
		'id'            => 'post-bottom-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	   register_sidebar( array(
		'name'          => esc_html__( 'Category Bottom Footer', 'afflifiate-theme' ),
		'id'            => 'category-bottom-footer',
		'description'   => esc_html__( 'Add widgets here.', 'afflifiate-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'afflifiate_theme_widgets_init' );