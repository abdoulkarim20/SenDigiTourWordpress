<?php 
$techup_enable_portfolio_section = get_theme_mod( 'techup_enable_portfolio_section', false );
$techup_portfolio_title = get_theme_mod( 'techup_portfolio_title');
$techup_portfolio_subtitle = get_theme_mod( 'techup_portfolio_subtitle' );

if($techup_enable_portfolio_section==true ) {
	$techup_portfolio_no        = 6;
	$techup_portfolio_page      = array();
	for( $k = 1; $k <= $techup_portfolio_no; $k++ ) {
		 $techup_portfolio_page[] = get_theme_mod('techup_portfolio_page'.$k); 

	}
	$techup_portfolio_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $techup_portfolio_page ),
	'posts_per_page' => absint($techup_portfolio_no),
	'orderby' => 'post__in'
	); 
	$techup_portfolio_query = new WP_Query( $techup_portfolio_args );
?>
 	<!-- ======= Start Portfolio Section ======= -->
    <section class="gallary-one bg-dull sp-100 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="all-title">
            <?php if($techup_portfolio_title) : ?>
            <h3 class="sec-title">
              <?php echo esc_html($techup_portfolio_title); ?>
            </h3>
            <?php endif; ?>
            <?php if($techup_portfolio_subtitle) : ?>
            <p><?php echo esc_html($techup_portfolio_subtitle); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
          <?php
            $count = 0;
            while($techup_portfolio_query->have_posts() && $count <= 5 ) :
            $techup_portfolio_query->the_post();
          ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 port-item mas-item px-0 cardio fitness">
          <div class="project">
            <div class="proj-img">
              <?php the_post_thumbnail(); ?>
                <div class="proj-overlay text-center">
                  <a href="<?php echo the_post_thumbnail_url(); ?>" class="pop-btn">
                  <i class="fa fa-plus"></i><br><?php echo the_title(); ?></a>
              </div>
            </div>
          </div>
        </div>
          <?php
            $count = $count + 1;
            endwhile;
            wp_reset_postdata();
          ?>
      </div>
    </div>
  </section>

    <!-- =======End Portfolio Section ======= -->

<?php } ?>