<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Crockery Store
 * @subpackage crockery_store
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'crockery_store_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'crockery_store_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/product_sec' ); ?>
	<?php do_action( 'crockery_store_after_product_sec' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'crockery_store_after_home_content' ); ?>
</main>

<?php get_footer();