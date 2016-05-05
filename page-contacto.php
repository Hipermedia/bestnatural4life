<?php
/*
*
* Template Name: Contacto
*
*/

get_header(); ?>
	<section class="u-contenedorCompleto">
		<?php while ( have_posts() ) : the_post(); ?>
		    <article class="Pagen Contacto">	
				<!-- Título del artículo -->
				<h1 class="Page-title u-block-title"><?php the_title(); ?></h1>
				
				<div class="Contacto-contenido u-contenedor">
					<div class="Contacto-contenidoFormulario">
						<?php echo do_shortcode(get_field('formularioContacto', 'option')); ?>
					</div>
					<!-- Contenido -->
					<?php the_content(); ?>	
					<!-- Compartir en redes sociales -->
					<?php //anliSocialShare(); ?>
				</div>

			</article>
		<?php endwhile; // end of the loop. ?>
	</section>
<?php get_footer(); ?>
