<?php
//about theme info
add_action( 'admin_menu', 'freelancer_services_gettingstarted' );
function freelancer_services_gettingstarted() {
	add_theme_page( esc_html__('About Freelancer Services', 'freelancer-services'), esc_html__('About Freelancer Services', 'freelancer-services'), 'edit_theme_options', 'freelancer_services_guide', 'freelancer_services_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function freelancer_services_admin_theme_style() {
	wp_enqueue_style('freelancer-services-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('freelancer-services-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'freelancer_services_admin_theme_style');

//guidline for about theme
function freelancer_services_mostrar_guide() { 
	//custom function about theme customizer
	$freelancer_services_return = add_query_arg( array()) ;
	$freelancer_services_theme = wp_get_theme( 'freelancer-services' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Freelancer Services', 'freelancer-services' ); ?> <span class="version"><?php esc_html_e( 'Version', 'freelancer-services' ); ?>: <?php echo esc_html($freelancer_services_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','freelancer-services'); ?></p>
    </div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="freelancer_services_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'freelancer-services' ); ?></button>
			<button class="tablinks" onclick="freelancer_services_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'freelancer-services' ); ?></button>
		</div>

		<?php
			$freelancer_services_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$freelancer_services_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Freelancer_Services_Plugin_Activation_Settings::get_instance();
				$freelancer_services_actions = $plugin_ins->recommended_actions;
				?>
				<div class="freelancer-services-recommended-plugins">
				    <div class="freelancer-services-action-list">
				        <?php if ($freelancer_services_actions): foreach ($freelancer_services_actions as $key => $freelancer_services_actionValue): ?>
				                <div class="freelancer-services-action" id="<?php echo esc_attr($freelancer_services_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($freelancer_services_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($freelancer_services_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($freelancer_services_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','freelancer-services'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($freelancer_services_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'freelancer-services' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Freelancer Services is a WordPress theme crafted by WordPress experts providing you with a clean, sophisticated, and elegant design. It looks professional as well and you can use it as a multipurpose theme as well for starting your freelancer website no matter which profession or business you are related to. Its minimal style is going to impress the visitors as it focuses entirely on the details and doesn’t have many gaudy elements that can make the overall website look clumsy. The retina-ready images look picture perfect on your website. Most importantly, the responsive design of this theme is going to make everything including the content as well as images resize perfectly according to the screen of the divide being used for viewing your website. This beautiful theme comes ready with a lot of personalization options giving you space for trying out different things to see what looks the best. Since the HTML codes in this theme are SEO friendly, obtaining good ranks in search engines results is no more an issue for your site. These codes are also optimized delivering faster page load time and outstanding web experience to the users. It is translation-ready, interactive, and has stunning animations effects included that will make the overall design look professional.','freelancer-services'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'freelancer-services' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'freelancer-services' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( FREELANCER_SERVICES_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'freelancer-services' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'freelancer-services'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'freelancer-services'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'freelancer-services'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'freelancer-services'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'freelancer-services'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( FREELANCER_SERVICES_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'freelancer-services'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'freelancer-services'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'freelancer-services'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( FREELANCER_SERVICES_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'freelancer-services'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'freelancer-services' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','freelancer-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','freelancer-services'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','freelancer-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_services_section') ); ?>" target="_blank"><?php esc_html_e('Services Section','freelancer-services'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','freelancer-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','freelancer-services'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','freelancer-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','freelancer-services'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','freelancer-services'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','freelancer-services'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','freelancer-services'); ?></span><?php esc_html_e(' Go to ','freelancer-services'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','freelancer-services'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','freelancer-services'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','freelancer-services'); ?></span><?php esc_html_e(' Go to ','freelancer-services'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','freelancer-services'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','freelancer-services'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','freelancer-services'); ?> <a class="doc-links" href="<?php echo esc_url( FREELANCER_SERVICES_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','freelancer-services'); ?></a></p>
			  	</div>
			</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Freelancer_Services_Plugin_Activation_Settings::get_instance();
			$freelancer_services_actions = $plugin_ins->recommended_actions;
			?>
				<div class="freelancer-services-recommended-plugins">
				    <div class="freelancer-services-action-list">
				        <?php if ($freelancer_services_actions): foreach ($freelancer_services_actions as $key => $freelancer_services_actionValue): ?>
				                <div class="freelancer-services-action" id="<?php echo esc_attr($freelancer_services_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($freelancer_services_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($freelancer_services_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($freelancer_services_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'freelancer-services' ); ?></h3>
				<hr class="h3hr">
				<div class="freelancer-services-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','freelancer-services'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'freelancer-services' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','freelancer-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','freelancer-services'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','freelancer-services'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','freelancer-services'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=freelancer_services_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','freelancer-services'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','freelancer-services'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

	</div>
</div>

<?php } ?>