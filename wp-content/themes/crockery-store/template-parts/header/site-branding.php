<?php
/*
* Display Logo and contact details
*/
?>
<div class="main-header">
    <?php if (get_theme_mod('crockery_store_topbar_visibility', false)) : ?>
        <div class="topbar py-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-5 align-self-center d-flex top-main-left">
                        <div class="social-media text-md-end text-center mb-md-0 mb-1">
                            <?php
                            $crockery_store_linkedin_url = get_theme_mod('crockery_store_linkedin_url');
                            $crockery_store_twt_url = get_theme_mod('crockery_store_twitter_url');
                            $crockery_store_fb_url = get_theme_mod('crockery_store_facebook_url');
                            $crockery_store_ins_url = get_theme_mod('crockery_store_instagram_url');
                            $crockery_store_youtube_url = get_theme_mod('crockery_store_youtube_url');

                            $crockery_store_linkedin_new_tab = esc_attr(get_theme_mod('crockery_store_linkedin_new_tab', 'true'));
                            $crockery_store_twt_new_tab = esc_attr(get_theme_mod('crockery_store_header_twt_new_tab', 'true'));
                            $crockery_store_fb_new_tab = esc_attr(get_theme_mod('crockery_store_header_fb_new_tab', 'true'));
                            $crockery_store_ins_new_tab = esc_attr(get_theme_mod('crockery_store_header_ins_new_tab', 'true'));
                            $crockery_store_youtube_new_tab = esc_attr(get_theme_mod('crockery_store_youtube_new_tab', 'true'));

                            if ($crockery_store_linkedin_url || $crockery_store_twt_url || $crockery_store_fb_url || $crockery_store_ins_url || $crockery_store_youtube_url) : ?>
                                
                                <?php if ($crockery_store_linkedin_url) : ?>
                                    <a <?php if ($crockery_store_linkedin_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($crockery_store_linkedin_url); ?>"><i class="<?php echo esc_attr(get_theme_mod('crockery_store_linkedin_icon', 'fab fa-linkedin-in')); ?>"></i></a>
                                <?php endif; ?>

                                <?php if ($crockery_store_twt_url) : ?>
                                    <a <?php if ($crockery_store_twt_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($crockery_store_twt_url); ?>"><i class="ms-xl-3 ms-2 <?php echo esc_attr(get_theme_mod('crockery_store_twitter_icon', 'fab fa-twitter')); ?>"></i></a>
                                <?php endif; ?>

                                <?php if ($crockery_store_fb_url) : ?>
                                    <a <?php if ($crockery_store_fb_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($crockery_store_fb_url); ?>"><i class="ms-xl-3 ms-2 <?php echo esc_attr(get_theme_mod('crockery_store_facebook_icon', 'fab fa-facebook-f')); ?>"></i></a>
                                <?php endif; ?>

                                 <?php if ($crockery_store_ins_url) : ?>
                                    <a <?php if ($crockery_store_ins_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($crockery_store_ins_url); ?>"><i class="ms-xl-3 ms-2 <?php echo esc_attr(get_theme_mod('crockery_store_instagram_icon', 'fab fa-instagram')); ?>"></i></a>
                                <?php endif; ?>
                        
                                <?php if ($crockery_store_youtube_url) : ?>
                                    <a <?php if ($crockery_store_youtube_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($crockery_store_youtube_url); ?>"><i class="ms-xl-3 ms-2 <?php echo esc_attr(get_theme_mod('crockery_store_youtube_icon', 'fab fa-youtube')); ?>"></i></a>
                                <?php endif; ?>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                     <div class="col-xl-5 col-lg-4 col-md-7 align-self-center">
                        <?php 
                        $crockery_store_discount_text_top = get_theme_mod('crockery_store_discount_text_top');
                        if ($crockery_store_discount_text_top) : ?>
                            <p class="discount-top m-0 text-lg-center text-md-end text-center"><?php echo esc_html($crockery_store_discount_text_top); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-5 col-lg-6 align-self-center">
                        <div class="bottom-right-box">
                           <?php if (!empty(get_theme_mod('crockery_store_help_center_link')) || !empty(get_theme_mod('crockery_store_help_center_text'))) : ?>
                              <span class="abt-btn pe-md-2">
                                  <a class="text-center" href="<?php echo esc_url(get_theme_mod('crockery_store_help_center_link', '')); ?>">
                                    <?php if (!empty(get_theme_mod('crockery_store_help_center_text'))) : ?>
                                        <?php echo esc_html(get_theme_mod('crockery_store_help_center_text', '')); ?>
                                    <?php endif; ?>
                                  </a>
                              </span>
                           <?php endif; ?>

                           <?php if (!empty(get_theme_mod('crockery_store_order_tracking_link')) || !empty(get_theme_mod('crockery_store_order_tracking_text'))) : ?>
                              <span class="track-btn">
                                  <a class="text-center" href="<?php echo esc_url(get_theme_mod('crockery_store_order_tracking_link', '')); ?>">
                                      <?php if (!empty(get_theme_mod('crockery_store_order_tracking_text'))) : ?>
                                        <?php echo esc_html(get_theme_mod('crockery_store_order_tracking_text', '')); ?>
                                      <?php endif; ?>
                                  </a>
                              </span>
                           <?php endif; ?>
                              
                            <div class="langauge-box">
                                <span class="currency me-md-2 mb-md-0 mb-2">
                                    <?php if (get_theme_mod('crockery_store_currency_switcher', false) && class_exists('WooCommerce')) : ?>
                                        <div class="currency-box d-md-inline-block">
                                            <?php echo do_shortcode('[woocs]'); ?>
                                        </div>
                                    <?php endif; ?>
                                </span>
                            </div>

                            <div class="langauge-box">
                                <span class="translate-btn d-flex">
                                    <?php if (get_theme_mod('crockery_store_cart_language_translator', false) && class_exists('GTranslate')) : ?>
                                        <div class="translate-lang position-relative d-md-inline-block">
                                            <?php echo wp_kses_post(do_shortcode('[gtranslate]')); ?>
                                        </div>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="headerbox">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 align-self-md-center">
                    <div class="logo">
                      <?php if( has_custom_logo() ) crockery_store_the_custom_logo(); ?>
                      <?php if(get_theme_mod('crockery_store_site_title',true) == 1){ ?>
                        <?php if (is_front_page() && is_home()) : ?>
                          <h1 class="text-capitalize">
                              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                          </h1> 
                        <?php else : ?>
                            <p class="text-capitalize site-title mb-1">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php endif; ?>
                      <?php }?>
                      <?php $crockery_store_description = get_bloginfo( 'description', 'display' );
                      if ( $crockery_store_description || is_customize_preview() ) : ?>
                        <?php if(get_theme_mod('crockery_store_site_tagline',false)){ ?>
                          <p class="site-description mb-0"><?php echo esc_html($crockery_store_description); ?></p>
                        <?php }?>
                      <?php endif; ?>
                    </div>
                </div>
               <div class="col-xl-7 col-lg-6 col-md-4 col-3 align-self-center">
                    <?php get_template_part('template-parts/navigation/site-nav'); ?>
               </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-9 align-self-center text-end">
                    <div class="header-details d-flex align-items-center justify-content-md-end justify-content-center">
                        <?php if (class_exists('woocommerce')) : ?>
                            <?php if (get_theme_mod('crockery_store_like_option') != '') : ?>
                                <p class="mb-0">
                                    <a href="<?php echo esc_url(get_theme_mod('crockery_store_like_option')); ?>" aria-label="<?php esc_attr_e('Wishlist', 'crockery-store'); ?>">
                                        <i class="far fa-heart me-1"></i><br>
                                        <span class="login-text"><?php esc_html_e('Wishlist', 'crockery-store'); ?></span>
                                    </a>
                                </p>
                            <?php endif; ?>
                            <?php if (class_exists('YITH_WCWL')) : ?>
                                <p class="mb-0">
                                    <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>" aria-label="<?php esc_attr_e('Wishlist', 'crockery-store'); ?>">
                                        <i class="far fa-heart me-1"></i>
                                        <span class="login-text"><?php esc_html_e('Wishlist', 'crockery-store'); ?></span>
                                    </a>
                                </p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <p class="mb-0">
                            <?php if (class_exists('woocommerce')) : ?>
                                <span class="product-cart text-center position-relative">
                                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('Shopping Cart', 'crockery-store'); ?>" aria-label="<?php esc_attr_e('My Cart', 'crockery-store'); ?>">
                                        <i class="fas fa-shopping-cart me-1"></i>
                                        <span class="login-text"><?php esc_html_e('Cart', 'crockery-store'); ?></span>
                                    </a>
                                    <?php 
                                    $crockery_store_cart_count = WC()->cart->get_cart_contents_count(); 
                                    if ($crockery_store_cart_count > 0) : ?>
                                        <span class="cart-count">(<?php echo esc_html($crockery_store_cart_count); ?>)</span>
                                    <?php endif; ?>
                                </span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>