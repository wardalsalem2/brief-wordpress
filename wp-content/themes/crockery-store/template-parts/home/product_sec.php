<?php
/**
 * Template part for displaying the services section
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

// Get setting to determine whether to display the section
$crockery_store_product_sec = get_theme_mod('crockery_store_our_products_show_hide_section', false);

if ($crockery_store_product_sec == '1') : ?>
<section id="product-section" class="my-5 mx-md-0 mx-3">
  <div class="container">
    <div class="product-main-head">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 text-md-start align-self-center">
          <?php if (get_theme_mod('crockery_store_product_short_heading')) : ?>
            <p class="product-top-text mb-3"><?php echo esc_html(get_theme_mod('crockery_store_product_short_heading')); ?></p>
          <?php endif; ?>

          <?php $crockery_store_our_products_heading_section = get_theme_mod('crockery_store_our_products_heading_section');
          if (!empty($crockery_store_our_products_heading_section)) : ?>
              <h2 class="product-heading mb-3">
                  <?php echo esc_html($crockery_store_our_products_heading_section); ?>
              </h2>
          <?php endif; ?>
        </div>
        <div class="col-lg-6 col-md-6 col-12 align-self-center text-end mb-3">
          <div class="countdowntimer">
            <p id="timer" class="countdown">
              <?php
              $crockery_store_dateday = get_theme_mod('crockery_store_product_clock_timer_end'); ?>
              <input type="hidden" class="date" value="<?php echo esc_attr($crockery_store_dateday); ?>">
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php if (class_exists('WooCommerce')) : ?>
      <div class="row">
        <?php
        // Fetch and display products from selected category
        $crockery_store_selected_category = get_theme_mod('crockery_store_our_product_product_category');
        
        if (!empty($crockery_store_selected_category)) {
          $crockery_store_args = array(
            'post_type'      => 'product',
            'posts_per_page' => 50,
            'product_cat'    => $crockery_store_selected_category,
            'order'          => 'ASC'
          );
          
          $crockery_store_loop = new WP_Query($crockery_store_args);
          
          while ($crockery_store_loop->have_posts()) : $crockery_store_loop->the_post();
            global $product;
          ?>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="product-box p-1">
                <div class="product-image">
                  <?php echo woocommerce_get_product_thumbnail(); ?>
                    <div class="bottom-icons">
                      <div class="cart-button">
                        <?php if ($product->is_type('simple')) { woocommerce_template_loop_add_to_cart(); } ?>
                      </div>
                      <div class="wishlistbox mb-1">
                        <a href="<?php echo esc_url(wc_get_page_permalink('wishlist')); ?>" class="wishlist-button">
                          <i class="fas fa-heart"></i>
                        </a>
                      </div>
                      <div class="share-icon">
                        <i class="fas fa-share-alt share-box"></i>
                        <div class="share-options">
                          <a href="<?php echo esc_url( get_theme_mod('crockery_store_product_social_link1', 'https://facebook.com') ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                          <a href="<?php echo esc_url( get_theme_mod('crockery_store_product_social_link2','https://twitter.com') ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                          <a href="<?php echo esc_url( get_theme_mod('crockery_store_product_social_link3','https://instagram.com') ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="main-cart-button">
                      <?php if ($product->is_type('simple')) { woocommerce_template_loop_add_to_cart(); } ?>
                    </div>
                </div>
                <div class="product-content text-start py-3">
                  <div class="product-rating">
                    <?php if ($product->is_type('simple')) : ?>
                      <?php woocommerce_template_loop_rating(); ?>
                    <?php endif; ?>
                  </div>
                  <h3 class="my-1">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
                  </h3>
                  <p class="mb-2 product-price">
                   <?php echo $product->get_price_html(); ?>
                  </p>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
        }
        ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>