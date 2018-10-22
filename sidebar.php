<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afflifiate_theme
 */

if ( ! is_active_sidebar( 'page-right' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'page-right' ); ?>
</aside><!-- #secondary -->
