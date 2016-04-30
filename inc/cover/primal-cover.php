<section class="PrimalCover u-contenedorCompleto">
	<div class="PrimalCover-contenido u-contenedor">
		<!-- Imagen principal -->
		<figure class="PrimalCover-imagen">
			<img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
		</figure>
		<!-- Títulos y llamadas a la acción -->
		<div class="PrimalCover-titulos">
			<h2 class="PrimalCover-titulo"><?php the_field('tituloPortada', 'option'); ?></h2>		
			<div class="PrimalCover-subtitulo"><?php the_field('subtituloPortada', 'option'); ?></div>
			<a class="PrimalCover-zelda" href="<?php the_field('enlacePortada', 'option'); ?>"><?php the_field('textoEnlacePortada', 'option'); ?></a>
		</div>
	</div>		
</section>
