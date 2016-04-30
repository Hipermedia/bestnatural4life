<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalBlocks">
	<!-- Contenedor -->
	<div class="PrimalBlocks-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h1 class="PrimalBlocks-titulo u-block-title"><?php the_field('tituloBeneficiosPortada', 'option'); ?></h1>
		<?php if( have_rows('beneficiosPortada', 'option') ): ?>
			<?php while( have_rows('beneficiosPortada', 'option') ): the_row(); ?>
				<div class="PrimalBlocks-block">
					<figure class="PrimalBlocks-blockFigure">
						<img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('titulo'); ?>">
					</figure>
					<h3 class="PrimalBlocks-blockTitulo"><?php the_sub_field('titulo'); ?></h3>
					<p class="PrimalBlocks-blockDescripcion">
						<?php the_sub_field('descripcion'); ?>
					</p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<a class="PrimalBlocks-contenidoZelda" href="<?php the_field('enlaceBeneficiosPortada', 'option'); ?>"><?php the_field('textoEnlaceBeneficiosPortada', 'option'); ?></a>
	</div>
</section>