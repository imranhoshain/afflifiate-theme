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
?>
</div>
<!-- #content -->
    <footer id="colophon" class="footer-area">
        <div class="footer-bottom">            
            <div class="row">
                <div class="col-md-7 offset-md-2">
                    <div class="footer-top-ads">
                        <?php 
                            if(is_home()){
                                dynamic_sidebar( 'home-top-footer' );}
                            else if(is_page()){
                                dynamic_sidebar( 'page-top-footer' );}
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-copywrite-text">
                        <?php echo $footer_copy_write_field['footer_copy_write_text'];?>
                       
                    </div>
                </div>
                <div class="col-md-7 offset-md-2">
                    <div class="footer-bottom-ads">
                        <?php 
                            if(is_home()){
                                dynamic_sidebar( 'home-top-footer' );}
                            else if(is_page()){
                                dynamic_sidebar( 'page-top-footer' );}
                        ?>
                        
                    </div>
                </div>
            </div>            
        </div>
    </footer>
    <!-- #colophon -->
</div>
<!-- #page -->
<?php wp_footer(); ?>
</body>
</html>