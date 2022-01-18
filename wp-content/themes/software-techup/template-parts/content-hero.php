<?php
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) {
?>
   
        
    <section class="hero-sec" style="background-image:url(<?php if($techup_banner_image) { echo esc_url($techup_banner_image); } else { echo esc_url(get_header_image()); } ?>)">
        <div class="container relative">
        <div class="row relative text-center">
            <div class="col-lg-12 lg-pl-0">
                <div class="banner-content pb-13">
                    <h1 class="banner-title white-color"><?php echo esc_html($techup_banner_title); ?></h1>
                    <div class="desc white-color mb-41">
                      <p><?php echo esc_html($techup_banner_content); ?></p>
                    </div>
                    <?php if($techup_banner_button_label1) :?>
                    <div class="banner-btn">
                        <a class="readmore-btn" href="<?php echo esc_url($techup_banner_button_link1); ?>"><?php echo esc_html($techup_banner_button_label1); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>            
      </div>
    </section>
	
	<div id="content"></div>

    <!--End Hero-->
 
<?php
}
?>