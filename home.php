<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>
	
	<?php primalSlider(); ?>

	<!-- Cover -->
	<?php primalCover(); // Cover con imágen de fondo, imagen principal y títulos ?>

	<?php
	
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3
			);

		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>

	<!-- Bloques -->
	<?php primalBlocks(); //  Bloques de contenido primordiales ?>

	<?php nutrientesCover(); ?>

	<!-- Testimonios -->
	<?php primalTestimony(); //  Bloques de contenido primordiales ?>
	
	<?php filmstripSlider(); ?>

	<?php primalContact(); ?>

<?php get_footer(); ?>
