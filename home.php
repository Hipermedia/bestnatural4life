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

	<!-- Bloques -->
	<?php primalBlocks(); //  Bloques de contenido primordiales ?>

	<section class="PrimalCover Nutrientes u-contenedorCompleto">
		<div class="PrimalCover-contenido u-contenedor">
			<!-- Imagen principal -->
			<figure class="PrimalCover-imagen">
				<img src="<?php the_field('imagenNutrientesPortada', 'option'); ?>" alt="">
			</figure>
			<!-- Títulos y llamadas a la acción -->
			<div class="PrimalCover-titulos">
				<?php while(have_rows('listadoNutrientesPortada', 'option')) : the_row(); ?>	
					<h2 class="PrimalCover-subtitulo"><?php the_sub_field('enunciado', 'option'); ?></h2>
				<?php endwhile; ?>
				<a href="<?php the_field('enlacePortada', 'option'); ?>" class="PrimalCover-action"><?php the_field('textoEnlacePortada', 'option'); ?></a>
			</div>
		</div>		
	</section>
	
	<?php filmstripSlider(); ?>

	<!-- Testimonios -->
	<?php primalTestimony(); //  Bloques de contenido primordiales ?>

	<?php primalContact(); ?>

<?php get_footer(); ?>
