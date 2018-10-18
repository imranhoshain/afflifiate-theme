<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package afflifiate_theme
 */

get_header();
?>
	<div id="primary" class="content-area page-section-content content-padding">
		<main id="main" class="site-main">
			<div class="row">
				<div class="col-md-2">
					<div class="left-sidebar">
						<?php if ( is_active_sidebar( 'page-left' ) ) {
							dynamic_sidebar( 'page-left' );
						}?>
					</div>
				</div>
				<div class="col-md-7">
					<div class="row">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>	
					</div>
				</div>
				<div class="col-md-3">
					<div class="right-sidebar">
						<?php if ( is_active_sidebar( 'page-right' ) ) {
							dynamic_sidebar( 'page-right' );
						}?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
