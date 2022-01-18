<?php 
$techup_enable_testimonial_section = get_theme_mod( 'techup_enable_testimonial_section', false );
$techup_testimonial_title= get_theme_mod( 'techup_testimonial_title','What People Say');
$techup_testimonial_subtitle= get_theme_mod( 'techup_testimonial_subtitle');

if($techup_enable_testimonial_section == true ) {
	$techup_testimonials_no        = 6;
	$techup_testimonials_pages      = array();
	for( $i = 1; $i <= $techup_testimonials_no; $i++ ) {
		 $techup_testimonials_pages[] = get_theme_mod('techup_testimonial_page'.$i);
	}
	$techup_testimonials_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $techup_testimonials_pages ),
	'posts_per_page' => absint($techup_testimonials_no),
	'orderby' => 'post__in'
	); 
	$techup_testimonials_query = new WP_Query( $techup_testimonials_args );
?>
 	<!-- ======= Testimonials Section ======= -->

    <section class="bg-theme sp-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="all-title">
          	<?php if($techup_testimonial_title) : ?>
            <h3 class="sec-title2">
              <?php echo esc_html($techup_testimonial_title); ?>
            </h3>
            <?php endif; ?>
            <?php if($techup_testimonial_subtitle) : ?>
            <p class="content"><?php echo esc_html($techup_testimonial_subtitle); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial-slider owl-carousel owl-loaded owl-drag">
                    	<?php
				          			$count = 0;
				          			while($techup_testimonials_query->have_posts() && $count <= 5 ) :
				          			$techup_testimonials_query->the_post();
				        			?>
                        <div class="ts-item">
                            <?php the_post_thumbnail(); ?>
                            <p data-aos="fade-up" data-aos-delay="300"><?php echo esc_html(get_the_excerpt()); ?></p>
                            <div class="ti-author" data-aos="zoom-in" data-aos-delay="200">
                                <h5 data-aos="zoom-in" data-aos-delay="400"><?php the_title(); ?></h5>
                                <p class="designation" data-aos="zoom-in" data-aos-delay="500"><?php get_the_author(); ?></p>
                            </div>
                        </div>
                        <?php
							$count = $count + 1;
							endwhile;
							wp_reset_postdata();
						?>
                    </div>
                </div>
            </div>
        </div>
  </section>
    
    <!-- End Testimonials Section ---->

	
<?php } ?>