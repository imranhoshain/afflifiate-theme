<?php
$header_top = cs_get_option( 'header_top_option' );
$bloginfo_options = cs_get_option( 'bloginfo_options' );
$header_top_left = cs_get_option( 'header_top_left' );
$social_link_array = cs_get_option( 'social_link_array' );
$header_middle_option = cs_get_option( 'header_middle_option' );
$header_after_options = cs_get_option( 'header_after_options' );
$after_header_option = cs_get_option( 'after_header_option' );
$marquee_label_option = cs_get_option( 'marquee_label_option' );
$marquee_post_option = cs_get_option( 'marquee_post_option' );
$marquee_post_link_option = cs_get_option( 'marquee_post_link_option' );
$header_logo = wp_get_attachment_image_src( $header_middle_option['header_logo'] , 'thumbnail')[0];
$header_banner = wp_get_attachment_image_src( $header_middle_option['header_banner'],'large' )[0];
?>
<header class="site-header">
	<!-- Header-top area start-->
	<div class="header-top">
		<?php if($header_top == true){?>
		<div class="header-top-left">
			<div class="row">
				<div class="col-md-8">
					<?php if($bloginfo_options == true){?>
					<h1 class="site-title">
					<a href="<?php echo $header_top_left['blog_info_url']; ?>" title="<?php echo $header_top_left['blog_info_name']; ?>"><strong><?php echo $header_top_left['site_title']; ?></strong><?php echo $header_top_left['site_tagline']; ?></a>
					</h1>
					<?php } else{?>
					<h1 class="site-title">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><strong><?php bloginfo('name'); ?></strong><?php bloginfo('description'); ?></a>
					</h1>
					<?php } ?>
				</div>
				<div class="col-md-4">
					<?php
					if(!empty($social_link_array)) :
					?>
					<div class="header-top-social">
						<?php
						foreach ($social_link_array as $single_social_link ) :
						?>
						<a href="<?php echo $single_social_link['social_link'] ?>" target="_blank"><i style="background: <?php echo $single_social_link['htop_icon_bg_color'] ?>; color: <?php echo $single_social_link['htop_icon_color'] ?>" class="<?php echo $single_social_link['social_icon'] ?>" aria-hidden="true"></i></a>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="header-middle">
		<?php if(cs_get_option( 'header_middle_options' ) == true){;?>
		<a href="">
			<div class="custom-middle-option" style="<?php if(!empty($header_banner)){ ?>background: url(<?php echo $header_banner;?>) no-repeat center center / cover;<?php }else{?> background: <?php echo $header_middle_option['hlogo_bg_color']; ?>; color: <?php echo $header_middle_option['hlogo_text_color']; }?> ">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-2">
						<div class="header-logo">
							<?php if(has_custom_logo()){
								the_custom_logo();
							} else if(!empty($header_logo)){ ?>
							<img src="<?php echo $header_logo;?>" alt="header-logo">
							<?php }  ?>
						</div>
					</div>
					<div class="col-md-10 col-sm-9 col-10">
						<div class="logo-right-text">
							<h1 class="align-middle"><?php echo $header_middle_option['header_logo_text']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</a>
		<?php }else{ ?>
		<div class="header-image">
			<a href="<?php echo site_url(); ?>"><img src="<?php header_image() ?>"/></a>
		</div>
		<?php } ?>
		<?php if($header_after_options == true){?>
		<div class="after-header" style="background: <?php echo $after_header_option['after_header_bg_color']; ?>;color: <?php echo $after_header_option['after_header_text_color']; ?>;"><?php echo $after_header_option['after_header_text']; ?>
			
		</div>
	</div>
	<?php } ?>
	<?php if(cs_get_option( 'header_bottom_options' ) == true){;?>
	<div class="header-bottom">
		<div class="row">
			<div class="col-md-1 col-sm-2 col-2">
				<div class="marquee-label" style="background: <?php echo $marquee_label_option['marquee_label_bg_color']; ?>; color: <?php echo $marquee_label_option['marquee_label_text_color']; ?>;">
					<?php echo $marquee_label_option['marquee_label_text']; ?>
				</div>
			</div>
			<div class="col-md-11 col-sm-10 col-10">
				<div class="marquee-post" style="background: <?php echo $marquee_post_option['marquee_post_bg_color']; ?>; color: <?php echo $marquee_post_option['marquee_post_text_color']; ?>;">
					<marquee behavior="scroll" onMouseOver="this.setAttribute('scrollamount', 0, 0);this.stop();" OnMouseOut="this.setAttribute('scrollamount', 6, 0);this.start();" scrollamount="2">
					<?php
					if(!empty($marquee_post_option['marquee_post_text'])){
						echo $marquee_post_option['marquee_post_text'];
									}else{
						$args = array(
						'numberposts' => $marquee_post_link_option['marquee_post_count'],
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => $marquee_post_link_option['marquee_post_type'],
						'post_status' => 'publish',
						);
						$recent_posts = wp_get_recent_posts( $args);
					foreach ($recent_posts as $recent) {
					
					echo get_the_post_thumbnail( $recent["ID"], 'thumbnail' );					
					echo ' <a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a>. &nbsp &nbsp &nbsp &nbsp &nbsp;';
					}}
					?>
					</marquee>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Header-top area End-->
	<!-- Nav area start-->
	<div class="menu-bar">
		<nav class="navbar navbar-expand-md header-menu" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
				<?php
				wp_nav_menu( array(
				'theme_location'    => 'header_menu',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker()
						) );
				?>			
		</nav>
	</div>
	<!-- Nav area End-->
</header>