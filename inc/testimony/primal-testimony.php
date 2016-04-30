<?php 
/** Bloques de testimonio. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalTestimony">
	<!-- Contenedor -->
	<div class="PrimalTestimony-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h2 class="PrimalTestimony-titulo"><?php the_field('tituloTestimoniosPortada', 'option'); ?></h2>
		
		<?php if( have_rows('testimoniosPortada', 'option') ): ?>
			<?php while( have_rows('testimoniosPortada', 'option') ): the_row(); ?>
				
				<!-- bloque -->
				<div class="PrimalTestimony-block">
					<figure class="PrimalTestimony-blockFigure">
						<i class="fa fa-quote-left"></i>
						<img src="<?php the_sub_field('imagen', 'option'); ?>" alt="">
					</figure>
					<blockquote class="PrimalTestimony-blockCita">
						<?php the_sub_field('cita'); ?>
					</blockquote>
					<h4 class="PrimalTestimony-blockAuthor">
						<?php the_sub_field('autor'); ?>
					</h4>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>