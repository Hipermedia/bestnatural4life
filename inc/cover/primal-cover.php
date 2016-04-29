<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>


<section class="PrimalCover u-contenedorCompleto">
	<div class="PrimalCover-contenido u-contenedor">
		<!-- Imagen principal -->
		<figure class="PrimalCover-imagen">
			<img src="<?php the_field('imagenPortada', 'option'); ?>" alt="">
		</figure>
		<!-- Títulos y llamadas a la acción -->
		<div class="PrimalCover-titulos">
			<h1 class="PrimalCover-titulo"><?php the_field('tituloPortada', 'option'); ?></h1>		
			<h2 class="PrimalCover-subtitulo"><?php the_field('subtituloPortada', 'option'); ?></h2>
			<a href="<?php the_field('enlacePortada', 'option'); ?>" class="PrimalCover-action"><?php the_field('textoEnlacePortada', 'option'); ?></a>
		</div>
	</div>		
</section>
