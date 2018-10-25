<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package afflifiate_theme
*/
get_header();

$blog_post_adds_two = cs_get_option( 'blog_post_adds_two' );
$blog_post_adds_field_two = cs_get_option( 'blog_post_adds_field_two' );

$blog_post_adds_four = cs_get_option( 'blog_post_adds_four' );
$blog_post_adds_field_four = cs_get_option( 'blog_post_adds_field_four' );

$blog_post_adds_six = cs_get_option( 'blog_post_adds_six' );
$blog_post_adds_field_six = cs_get_option( 'blog_post_adds_field_six' );

$blog_post_adds_eight = cs_get_option( 'blog_post_adds_eight' );
$blog_post_adds_field_eight = cs_get_option( 'blog_post_adds_field_eight' );

$blog_post_adds_ten = cs_get_option( 'blog_post_adds_ten' );
$blog_post_adds_field_ten = cs_get_option( 'blog_post_adds_field_ten' );

?>
<div id="primary" class="content-area blog-page-content content-padding">
	<main id="main" class="site-main">
		<div class="row">
			<div class="col-md-2">
				<div class="left-sidebar">
					<?php if ( is_active_sidebar( 'blog-left-widget' ) ) {
						dynamic_sidebar( 'blog-left-widget' );
					}?>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<?php
					if ( have_posts() ) : $postnum=0;
					
					/* Start the Loop */
					while ( have_posts() ) :
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );
					$postnum++;
						if($blog_post_adds_two){
					    if ($postnum == 2) { ?>
				            <div class="col-md-12 mt-2 mb-3">
				            	<?php echo $blog_post_adds_field_two; ?>
				            </div>
					    <?php } }

					    if($blog_post_adds_four){
					    if ($postnum == 4) { ?>
				            <div class="col-md-12 mt-2 mb-3">
				            	<?php echo $blog_post_adds_field_four; ?>
				            </div>
					    <?php } }

					    if($blog_post_adds_six){
					    if ($postnum == 6) { ?>
				            <div class="col-md-12 mt-2 mb-3">
				            	<?php echo $blog_post_adds_field_six; ?>
				            </div>
					    <?php } }

					    if($blog_post_adds_eight){
					    if ($postnum == 8) { ?>
				            <div class="col-md-12 mt-2 mb-3">
				            	<?php echo $blog_post_adds_field_eight; ?>
				            </div>
					    <?php } }

					    if($blog_post_adds_ten){
					    if ($postnum == 10) { ?>
				            <div class="col-md-12 mt-2 mb-3">
				            	<?php echo $blog_post_adds_field_ten; ?>
				            </div>
					    <?php } }

					endwhile;
					post_pagination();
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="right-sidebar">
					<?php if ( is_active_sidebar( 'blog-right-widget' ) ) {
						dynamic_sidebar( 'blog-right-widget' );
					}?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();