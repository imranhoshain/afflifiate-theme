<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package afflifiate_theme
 */

get_header();
?>

	<section id="primary" class="content-area content-search-page content-padding">
		<main id="main" class="site-main">
			<div class="row">
			<div class="col-md-2">
				<div class="left-sidebar">
					<?php if ( is_active_sidebar( 'search-left-widget' ) ) {
						dynamic_sidebar( 'search-left-widget' );
					}?>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'What are you looking? %s', 'afflifiate-theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
					<?php if ( is_active_sidebar( 'search-right-widget' ) ) {
						dynamic_sidebar( 'search-right-widget' );
					}?>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
