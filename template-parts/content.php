<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package afflifiate_theme
*/
?>
<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="article-page-image">
			<?php afflifiate_theme_post_thumbnail(); ?>
		</div>
		<div class="article-page-content">
			<header class="entry-header">
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php if (strlen($post->post_title) > 35) {
						echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } else {
						the_title();
						} ?>
					</a>
				</h2>
			</header><!-- .entry-header -->
			
			<div class="entry-content">
				<?php
				if (is_single()) { //New add for read more button
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'afflifiate-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );} //End if condition
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'afflifiate-theme' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="read-more-btn">
						<?php		
							if (!is_single()) {
							the_excerpt(); //Blog page add
							echo '<p class="read-more-warp"><a href="' . esc_url(get_permalink()) . '" class="blog-bexed-btn">Continue</a></p>';
							} 
						?>
					</div>
				<?php endif; ?>
					<div class="entry-meta">					
						<?php 
							afflifiate_theme_posted_on();
							//afflifiate_theme_posted_by(); 
						?>
					</div><!-- .entry-meta -->				

				<?php //afflifiate_theme_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>