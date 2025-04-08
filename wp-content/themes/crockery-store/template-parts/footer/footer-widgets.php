<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */
?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$crockery_store_no_of_footer_col = get_theme_mod('crockery_store_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$crockery_store_col_lg_footer_class = 'col-lg-' . (12 / $crockery_store_no_of_footer_col);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$crockery_store_col_md_footer_class = 'col-md-' . (12 / $crockery_store_no_of_footer_col);
?>
<div class="container">
    <aside class="widget-area row py-2 pt-3" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'crockery-store' ); ?>">
        <div class="<?php echo esc_attr($crockery_store_col_lg_footer_class); ?> <?php echo esc_attr($crockery_store_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($crockery_store_i = 2; $crockery_store_i <= $crockery_store_no_of_footer_col; $crockery_store_i++) :
            if ($crockery_store_i <= $crockery_store_no_of_footer_col) :
                ?>
               <div class="col-12 <?php echo esc_attr($crockery_store_col_lg_footer_class); ?> <?php echo esc_attr($crockery_store_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $crockery_store_i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>