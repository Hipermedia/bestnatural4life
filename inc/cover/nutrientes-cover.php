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
