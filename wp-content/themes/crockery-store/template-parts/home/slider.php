<?php
/**
 * Template part for displaying slider section
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

$crockery_store_static_image = get_template_directory_uri() . '/assets/images/slider-img.png';
$crockery_store_slider_arrows = get_theme_mod('crockery_store_slider_arrows', false);
?>
<?php if ($crockery_store_slider_arrows) : ?>
  <section id="slider">
    <div class="container">
      <div class="owl-carousel owl-theme">
        <?php 
        $crockery_store_slide_pages = array();
        for ($crockery_store_count = 1; $crockery_store_count <= 4; $crockery_store_count++) {
          $mod = absint(get_theme_mod('crockery_store_slider_page' . $crockery_store_count));
          if ($mod != 0) {
            $crockery_store_slide_pages[] = $mod;
          }
        }

        if (!empty($crockery_store_slide_pages)) :
          $crockery_store_args = array(
            'post_type' => 'page',
            'post__in' => $crockery_store_slide_pages,
            'orderby' => 'post__in'
          );
          $crockery_store_query = new WP_Query($crockery_store_args);
          if ($crockery_store_query->have_posts()) :
            while ($crockery_store_query->have_posts()) : $crockery_store_query->the_post(); ?>
              <div class="item">
                <div class="row m-0">
                  <div class="col-lg-6 col-md-6 col-12 slider-content-col align-self-center">
                    <div class="carousel-caption">
                      <div class="inner_carousel">
                        <?php if (get_theme_mod('crockery_store_slider_short_heading')) : ?>
                          <p class="slidetop-text mb-2"><?php echo esc_html(get_theme_mod('crockery_store_slider_short_heading')); ?></p>
                        <?php endif; ?>
                        <h1 class="mb-md-3 mb-0">
                          <a href="<?php the_permalink(); ?>" class="text-capitalize"><?php the_title();?></a>
                        </h1>
                        <p class="mb-0 slide-content"><?php echo wp_kses_post(wp_trim_words(get_the_content(), 30)); ?></p>
                        <div class="more-btn mt-md-4 mt-2">
                          <a class="text-capitalize mb-3 slider-btn1" href="<?php the_permalink(); ?>" target="_blank">
                            <?php esc_html_e( 'Shop Now', 'crockery-store' ); ?>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 slider-img-col align-self-center">
                    <div class="slider-main-img">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" />
                      <?php else : ?>
                        <img src="<?php echo esc_url($crockery_store_static_image); ?>" alt="<?php esc_attr_e('Slider Image', 'crockery-store'); ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else : ?>
            <div class="no-postfound"><?php esc_html_e('No posts found', 'crockery-store'); ?></div>
          <?php endif;
        endif; ?>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
<?php endif; ?>