<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package afflifiate_theme
*/
get_header();
?>
<div id="primary" class="content-area archive-content content-padding">
	<main id="main" class="site-main">
		<div class="row">
			<div class="col-md-2">
				<div class="left-sidebar">
					<?php if ( is_active_sidebar( 'archive-left-widget' ) ) {
						dynamic_sidebar( 'archive-left-widget' );
					}?>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					the_posts_navigation();
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="right-sidebar">
					<?php if ( is_active_sidebar( 'archive-right-widget' ) ) {
						dynamic_sidebar( 'archive-right-widget' );
					}?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();