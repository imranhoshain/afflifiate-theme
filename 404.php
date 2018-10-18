<?php
/**
* The template for displaying 404 pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package afflifiate_theme
*/
get_header();
?>
<div id="primary" class="content-area page-not-found-content content-padding">
	<main id="main" class="site-main">
		<div class="row section-padding">
			<div class="col-md-2">
				<div class="left-sidebar">
					<?php if ( is_active_sidebar( 'error-left' ) ) {
						dynamic_sidebar( 'error-left' );
					}?>
				</div>
			</div>
			<div class="col-md-7 text-center">
				<div class="error-img">
					<img src="<?php echo get_template_directory_uri() .'/assets/images/404.gif';?>" alt="404 Page" />
				</div>
			</div>
			<div class="col-md-3">
				<div class="right-sidebar">
					<?php if ( is_active_sidebar( 'error-right' ) ) {
						dynamic_sidebar( 'error-right' );
					}?>
				</div>
			</div>
		</div>
		<!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();