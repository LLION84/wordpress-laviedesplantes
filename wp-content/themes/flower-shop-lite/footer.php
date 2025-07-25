<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Flower Shop Lite
 */
?>
<div id="footer-wrapper">
    	<div class="container footer">
             <div class="cols-3 widget-column-1">  
              <?php $about_title = get_theme_mod('about_title'); ?>	
              <?php if (!empty($about_title)) { ?>
                <h5><?php echo esc_html($about_title);?></h5>             
			   <?php } ?>
               
			   <?php $about_description = get_theme_mod('about_description'); ?>
                <?php if (!empty($about_description)) { ?>
                <p><?php echo wp_kses_post($about_description);?></p>
			   <?php } ?>  
            </div><!--end .widget-column-1-->                  
			    
               <div class="cols-3 widget-column-2">  
              <?php $newsfeed_title = get_theme_mod('newsfeed_title'); ?>
                <?php if (!empty($newsfeed_title)) { ?>
                <h5><?php echo esc_html($newsfeed_title); ?></h5>            
			  <?php } ?>  
              
              <?php $args = array( 'posts_per_page' => 7, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
					$postquery = new WP_Query( $args );
					?>
                    <?php while( $postquery->have_posts() ) : $postquery->the_post(); ?>
                        <div class="recent-post">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>                    
				
              </div><!--end .widget-column-3-->
                
             <div class="cols-3 widget-column-3">  
               <?php $contact_title = get_theme_mod('contact_title'); ?>              
               <?php if (!empty($contact_title)){  ?>
                <h5><?php echo esc_html($contact_title); ?></h5>              
			   <?php } ?>
                <div class="phone-no">	 
                <?php $contact_add = get_theme_mod('contact_add');?>               
               <?php if (!empty($contact_add)) { ?>
                <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/location-icon.png" alt="" /><?php echo wp_kses_post($contact_add); ?></p>             
			   <?php } ?>                
              <?php $contact_no = get_theme_mod('contact_no'); ?>
              <?php if (!empty($contact_no)) { ?>
                <p> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/footer-icon-phone.png" alt="" /> <?php echo esc_html($contact_no); ?></p>              
			   <?php } ?>  
              
               <?php $contact_mail = get_theme_mod('contact_mail'); ?>          
               <?php if(!empty($contact_mail)){ ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/footer-icon-email.png" alt="" />
              <a href="mailto:<?php echo esc_attr( antispambot(sanitize_email( $contact_mail ) )); ?>"><?php echo esc_html( antispambot( $contact_mail ) ); ?></a>
			  <?php } ?>                             
               </div>
          </div><!--end .widget-column-4-->
            <div class="clear"></div>
        </div><!--end .container--> 
         <div class="copyright-wrapper">
        	<div class="container">
           		 <div class="copyright-txt">&nbsp;</div>
            	 <div class="design-by"><?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','flower-shop-lite');?><a href="<?php echo esc_url('https://www.sktthemes.org/shop/free-shop-wordpress-theme/');?>" target="_blank">
        <?php esc_html_e('Flower Shop Lite','flower-shop-lite'); ?>
        </a></div>
                 <div class="clear"></div>
            </div>           
        </div>
    </div><!--end .footer-wrapper-->
<?php wp_footer(); ?>

</body>
</html>