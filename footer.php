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

?>

    </div>
    <!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
           <div class="footer-top section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php dynamic_sidebar('footer-1'); ?>                           
                    </div>
                    
                    <div class="col-md-4">
                       <?php dynamic_sidebar('footer-2'); ?>                        
                    </div>
                    <div class="col-md-4">                        
                        <?php dynamic_sidebar('footer-3'); ?>                        
                    </div>
                </div>
            </div>
        </div>          
           
        <div class="footer-bottom wow fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018 All Rights Reserved, Designed By <a href="http://w3codex.com/" target="_blank">W3codex</a><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

    </body>

    </html>
