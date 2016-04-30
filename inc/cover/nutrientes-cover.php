<section class="PrimalCover Nutrientes u-contenedorCompleto">
	<div class="PrimalCover-contenido u-contenedor">
		<h2 class="PrimalCover-contenidoTitulo u-block-title"><?php the_field('tituloNutrientesPortada', 'option'); ?></h2>
		<!-- Imagen principal -->
		<figure class="Nutrientes-imagen">
			<img src="<?php the_field('imagenNutrientesPortada', 'option'); ?>" alt="">
		</figure>
		<!-- Títulos y llamadas a la acción -->
		<div class="Nutrientes-titulos">
			<?php while(have_rows('listadoNutrientesPortada', 'option')) : the_row(); ?>
				<div>
					<span><?php the_sub_field('numero', 'option'); ?></span>	
					<h2 class="Nutrientes-subtitulo"><?php the_sub_field('enunciado', 'option'); ?></h2>
				</div>
			<?php endwhile; ?>
			<a class="Nutrientes-titulosZelda" href="<?php the_field('enlacePortada', 'option'); ?>" class="PrimalCover-action"><?php the_field('textoFinalNutrientesPortada', 'option'); ?></a>
		</div>
	</div>		
</section>
