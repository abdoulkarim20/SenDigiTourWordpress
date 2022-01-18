<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('food_truck_lite_above_slider_section'); ?>
  
  <?php if(get_theme_mod('food_truck_lite_show_slider') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
        <?php $food_truck_lite_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'food_truck_lite_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $food_truck_lite_content_pages[] = $mod;
            }
          }
          if( !empty($food_truck_lite_content_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $food_truck_lite_content_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if ( get_theme_mod('food_truck_lite_slider_title',true) != '' ) {?>
                    <h1><?php the_title(); ?></h1> 
                  <?php }?>
                  <?php if ( get_theme_mod('food_truck_lite_slider_content',true) != '' ) {?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( food_truck_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('food_truck_lite_slider_excerpt','25')))); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('food_truck_lite_slider_button_label','READ MORE') != '' && get_theme_mod('food_truck_lite_slider_button',true) != '') {?>
                    <div class ="read-more mt-md-4 mt-0">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('food_truck_lite_slider_button_label',__('Read More','food-truck-lite')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('food_truck_lite_slider_button_label',__('Read More','food-truck-lite')) ); ?></span></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon py-md-2 px-md-3" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Previous','food-truck-lite'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon py-md-2 px-md-3" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Next','food-truck-lite'); ?></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('food_truck_lite_below_banner_section'); ?>

  <section id="menu-section" class="py-5 text-center">
    <div class="container">
      <?php if( get_theme_mod('food_truck_lite_small_title') != ''){ ?>
        <strong><?php echo esc_html(get_theme_mod('food_truck_lite_small_title','')); ?></strong>
      <?php }?>
      <?php $food_truck_lite_content_pages = array();    
      $mod = absint( get_theme_mod( 'food_truck_lite_feature_page' ));
      if ( 'page-none-selected' != $mod ) {
        $food_truck_lite_content_pages[] = $mod;
      }
      if( !empty($food_truck_lite_content_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $food_truck_lite_content_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 0;
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row box-image text-center">
              <h2 class="section-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <div class="clearfix"></div>
            </div>
          <?php $count++; endwhile; 
          wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <div class="clearfix"></div> 
    </div>
  </section>

  <?php do_action('food_truck_lite_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>