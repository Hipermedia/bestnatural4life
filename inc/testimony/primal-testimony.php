<?php 
/** Bloques de testimonio. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalTestimony">
	<!-- Contenedor -->
	<div class="PrimalTestimony-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h2 class="PrimalTestimony-titulo u-block-title"><?php the_field('tituloTestimoniosPortada', 'option'); ?></h2>
		
		<?php if( have_rows('testimoniosPortada', 'option') ): ?>
			<?php while( have_rows('testimoniosPortada', 'option') ): the_row(); ?>
				<div class="PrimalTestimony-block">
					<figure class="PrimalTestimony-blockFigure">
						<img src="<?php the_sub_field('imagen', 'option'); ?>" alt="">
					</figure>
					<div class="PrimalTestimony-blockComment">
						<blockquote class="PrimalTestimony-blockCita">
							<?php the_sub_field('cita'); ?>
						</blockquote>
						<h4 class="PrimalTestimony-blockAuthor">
							<?php the_sub_field('autor'); ?>
						</h4>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>