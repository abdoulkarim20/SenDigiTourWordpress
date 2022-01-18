<?php
/**
 * The Header for our theme.
 * @package Food Truck Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	
	<?php if(get_theme_mod('food_truck_lite_preloader',false)){ ?>
    <?php if(get_theme_mod( 'food_truck_lite_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
      	<span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'food_truck_lite_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
	<?php }?>
	<header role="banner" class="position-relative">
		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'food-truck-lite' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'food-truck-lite' ); ?></span></a>
		<?php if (has_nav_menu('primary')){ ?>
			<div class="toggle-menu responsive-menu">
        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_html(get_theme_mod('food_truck_lite_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('food_truck_lite_mobile_menu_label', __('Menu','food-truck-lite'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('food_truck_lite_mobile_menu_label', __('Menu','food-truck-lite'))); ?></span></button>
      </div>
    <?php }?>	

		<div id="header">	
			<?php if(get_theme_mod('food_truck_lite_top_header',false) == true || get_theme_mod('food_truck_lite_hide_topbar_responsive',true) == true){ ?>
				<div class="top-bar py-2 text-center text-md-start">
					<div class="container">
		    		<div class="row">
			      	<div class="col-lg-7 col-md-6 col-sm-8 align-self-center">
		          	<?php if ( get_theme_mod('food_truck_lite_topbar_text','') != "" ) {?>
									<p class="mb-0"><?php echo esc_html(get_theme_mod('food_truck_lite_topbar_text','')); ?></p>
								<?php }?>
			      	</div>
			      	<div class="col-lg-5 col-md-6 col-sm-4 align-self-center text-md-end text-center">
			      		<?php if ( get_theme_mod('food_truck_lite_call','') != "" ) {?>
									<p class="call-info mb-0 text-md-end d-inline-block me-3"><a href="tel:<?php echo esc_attr(get_theme_mod('food_truck_lite_call','')); ?>"><i class="<?php echo esc_html(get_theme_mod('food_truck_lite_phone_icon','fas fa-phone')); ?> pe-2"></i><?php echo esc_html(get_theme_mod('food_truck_lite_call','')); ?><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'food-truck-lite') ?></span></a></p>
								<?php }?>
								<?php if(class_exists('woocommerce')){ ?>
			            <span class="cart_no">
			              <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket me-2"></i><span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> <?php echo esc_html('items', 'food-truck-lite'); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Cart', 'food-truck-lite' ); ?></span></a>
			            </span>
		            <?php }?>
			      	</div>
				    </div>
				  </div>
				</div>
			<?php }?>
			<div class="container">
				<div class="menu-section py-3 text-center text-md-start">
					<div class="row m-0">
						<div class="col-lg-3 col-md-5 col-sm-4 align-self-center">
							<div class="logo">
		          	<?php if ( has_custom_logo() ) : ?>
		            	<div class="site-logo"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>
		              <?php $blog_info = get_bloginfo( 'name' ); ?>
		              <?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('food_truck_lite_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                	<h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
		            <?php endif; ?>
		            <?php if( get_theme_mod('food_truck_lite_show_tagline',true) != ''){ ?>
		                <?php
		                $description = get_bloginfo( 'description', 'display' );
		                if ( $description || is_customize_preview() ) :
		                ?>
		                	<p class="site-description m-0">
		                    <?php echo esc_html($description); ?>
		                	</p>
		                <?php endif; ?>
		            <?php }?>
			        </div>
						</div>
						<div class="col-lg-7 col-md-3 col-sm-1 align-self-center">
							<div class="<?php if( get_theme_mod( 'food_truck_lite_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
		            <div id="sidelong-menu" class="nav side-nav">
		              <nav id="primary-site-navigation" class="nav-menu ps-lg-3 p-0" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'food-truck-lite' ); ?>">
		              	<?php if (has_nav_menu('primary')){
		                  wp_nav_menu( array( 
		                    'theme_location' => 'primary',
		                    'container_class' => 'main-menu-navigation clearfix' ,
		                    'menu_class' => 'clearfix',
		                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                    'fallback_cb' => 'wp_page_menu',
		                  ) ); 
		              	}?>
		                <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('food_truck_lite_close_menu_label', __('Close Menu','food-truck-lite'))); ?><i class="<?php echo esc_html(get_theme_mod('food_truck_lite_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('food_truck_lite_close_menu_label', __('Close Menu','food-truck-lite'))); ?></span></a>
		              </nav>
		            </div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-3 ps-md-0 align-self-center">
							<div class="top-bar-btn text-md-end text-center my-3 my-md-0">
		          	<?php if ( get_theme_mod('food_truck_lite_topbar_button_link','') != "" || get_theme_mod('food_truck_lite_topbar_button_text','') != "" ) {?>
									<a href="<?php echo esc_url(get_theme_mod('food_truck_lite_topbar_button_link','')); ?>" class="mb-0"><?php echo esc_html(get_theme_mod('food_truck_lite_topbar_button_text','')); ?></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(get_theme_mod('food_truck_lite_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
    	<div id="page-site-header">
        <div class='page-header'> 
        	<?php the_title( '<h1>', '</h1>' ); ?>
        </div>
    	</div>
    <?php }
	}?>