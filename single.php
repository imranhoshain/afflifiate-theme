<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package afflifiate_theme
 */

get_header();
?>

	<div id="primary" class="content-area single-post-content content-padding">
		<main id="main" class="site-main">
			<div class="row">
				<div class="col-md-2">
					<div class="left-sidebar">
						<?php if ( is_active_sidebar( 'post-left-widget' ) ) {
							dynamic_sidebar( 'post-left-widget' );
						}?>
					</div>
				</div>
				<?php
        			while (have_posts()):the_post()
            	?>
				<div class="col-md-7">
					<div class="single-page-post">						
		               	<?php if (has_post_thumbnail()) : ?>  
		               	<div class="single-post-thumbnail">        
	                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	                            <?php the_post_thumbnail(); ?>
	                        </a>
	                    </div>		                    
		                <?php endif; ?>			            
						<div class="single-article-content">
						    <h2 class="entry-title">
			                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			                </h2>
							<p>
							 	Published on: 
							 	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php afflifiate_theme_posted_on(); ?></a> 
							 	by  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php afflifiate_theme_posted_by();; ?></a> <?php edit_post_link('Edit');?>
							</p>
				            <div class="content">
				                <?php the_content(); ?>
					
				            </div>				

			                <?php 
			            		// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; 
							?>	
						</div>		           		 
					</div>               
				</div>	
				<?php
       				 endwhile;
        		?>				
				<div class="col-md-3">
					<div class="right-sidebar">
						<?php if ( is_active_sidebar( 'post-right-widget' ) ) {
							dynamic_sidebar( 'post-right-widget' );
						}?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
