<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package afflifiate_theme
*/


$footer_copy_write_field = cs_get_option( 'footer_copy_write_field' );
$footer_page_top_advertise = cs_get_option( 'footer_page_top_advertise' );
$footer_page_top_adds = cs_get_option( 'footer_page_top_adds' );
$footer_page_blog_top_adds = cs_get_option( 'footer_page_blog_top_adds' );
$footer_single_page_top_adds = cs_get_option( 'footer_single_page_top_adds' );
$footer_category_page_top_adds = cs_get_option( 'footer_category_page_top_adds' );

$footer_page_bottom_advertise = cs_get_option( 'footer_page_bottom_advertise' );
$footer_page_bottom_adds = cs_get_option( 'footer_page_bottom_adds' );
$footer_page_blog_bottom_adds = cs_get_option( 'footer_page_blog_bottom_adds' );
$footer_single_page_bottom_adds = cs_get_option( 'footer_single_page_bottom_adds' );
$footer_category_page_bottom_adds = cs_get_option( 'footer_category_page_bottom_adds' );

?>
</div>
<!-- #content -->
    <footer id="colophon" class="footer-area">
        <div class="footer-bottom">            
            <div class="row">
                
                <?php if($footer_page_top_advertise == TRUE) {              

                   if(is_page()){ if(isset ($footer_page_top_adds)){foreach ($footer_page_top_adds as $single_page_add) { ?>
                    <div class="col-md-<?php echo $single_page_add['col_number'] ?> offset-md-<?php echo $single_page_add['offset_number'] ?>">
                        <div class="blog-page-add">
                            <?php echo $single_page_add['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?> 

                 <?php                 

                   if(is_home()){ if(isset ($footer_page_blog_top_adds)){foreach ($footer_page_blog_top_adds as $single_blog_page_add) { ?>
                    <div class="col-md-<?php echo $single_blog_page_add['col_number'] ?> offset-md-<?php echo $single_blog_page_add['offset_number'] ?>">
                        <div class="blog-page-add">
                            <?php echo $single_blog_page_add['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?>                              

                 <?php if(is_single()){ if(isset ($footer_single_page_top_adds)){foreach ($footer_single_page_top_adds as $footer_single_page_top_add) { ?>
                    <div class="col-md-<?php echo $footer_single_page_top_add['col_number'] ?> offset-md-<?php echo $footer_single_page_top_add['offset_number'] ?>">
                        <div class="single-page-add">
                            <?php echo $footer_single_page_top_add['single_page_ads']?>
                        </div>
                    </div>
                <?php }}} ?>

                 <?php if(is_category()){ if(isset ($footer_category_page_top_adds)){foreach ($footer_category_page_top_adds as $category_page_top) { ?>
                    <div class="col-md-<?php echo $category_page_top['col_number'] ?> offset-md-<?php echo $category_page_top['offset_number'] ?>">
                        <div class="category-add">
                            <?php echo $category_page_top['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?> 
                                
                <?php }else{ ?>
                <div class="col-md-7 offset-md-2">
                    <div class="footer-top-ads">
                        <?php        

                            if(is_page()){
                                dynamic_sidebar( 'footer-top-page' );}
                            else if(is_home()){
                                dynamic_sidebar( 'footer-top-blog' );}
                            else if(is_single()){
                                dynamic_sidebar( 'footer-top-single' );}
                            else if(is_category()){
                                dynamic_sidebar( 'footer-top-category' );}
                            else {
                                dynamic_sidebar( 'footer-top-other' );}
                        
                        ?>                        
                    </div>
                </div>
<?php } ?>
                <div class="col-md-12">
                    <div class="footer-copywrite-text">
                        <p><?php echo $footer_copy_write_field['footer_copy_write_text'];?></p>
                    </div>
                </div>

                <?php if($footer_page_bottom_advertise == TRUE) {              

                   if(is_page()){ if(isset ($footer_page_bottom_adds)){foreach ($footer_page_bottom_adds as $single_page_add) { ?>
                    <div class="col-md-<?php echo $single_page_add['col_number'] ?> offset-md-<?php echo $single_page_add['offset_number'] ?>">
                        <div class="blog-page-add">
                            <?php echo $single_page_add['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?> 

                 <?php                 

                   if(is_home()){ if(isset ($footer_page_blog_bottom_adds)){foreach ($footer_page_blog_bottom_adds as $single_blog_page_add) { ?>
                    <div class="col-md-<?php echo $single_blog_page_add['col_number'] ?> offset-md-<?php echo $single_blog_page_add['offset_number'] ?>">
                        <div class="blog-page-add">
                            <?php echo $single_blog_page_add['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?>                              

                 <?php if(is_single()){ if(isset ($footer_single_page_bottom_adds)){foreach ($footer_single_page_bottom_adds as $footer_single_page_bottom_add) { ?>
                    <div class="col-md-<?php echo $footer_single_page_bottom_add['col_number'] ?> offset-md-<?php echo $footer_single_page_bottom_add['offset_number'] ?>">
                        <div class="single-page-add">
                            <?php echo $footer_single_page_bottom_add['single_page_ads']?>
                        </div>
                    </div>
                <?php }}} ?>

                 <?php if(is_category()){ if(isset ($footer_category_page_bottom_adds)){foreach ($footer_category_page_bottom_adds as $category_page_bottom) { ?>
                    <div class="col-md-<?php echo $category_page_bottom['col_number'] ?> offset-md-<?php echo $category_page_bottom['offset_number'] ?>">
                        <div class="category-add">
                            <?php echo $category_page_bottom['front_page_add']?>
                        </div>
                    </div>
                <?php }}} ?> 
                                
                <?php }else{ ?>
                <div class="col-md-7 offset-md-2">
                    <div class="footer-bottom-ads">
                        <?php        

                            if(is_page()){
                                dynamic_sidebar( 'footer-bottom-page' );}
                            else if(is_home()){
                                dynamic_sidebar( 'footer-bottom-blog' );}
                            else if(is_single()){
                                dynamic_sidebar( 'footer-bottom-single' );}
                            else if(is_category()){
                                dynamic_sidebar( 'footer-bottom-category' );}
                            else {
                                dynamic_sidebar( 'footer-bottom-other' );}
                        
                        ?>                        
                    </div>
                </div>
                <?php } ?>
            </div>            
        </div>
         <div id="scrollTop"><i class="fa fa-chevron-up"></i></div>
    </footer>
    <!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body>
</html>