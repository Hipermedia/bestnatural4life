<?php 
/** Sección de texto. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>

<!-- PrimalBloques -->
<section class="PrimalContacto u-contenedor-completo">
	<div class="PrimalContacto-contenido u-contenedor" >
		<h2 class="u-block-title">- Contacto -</h2>
		<div class="PrimalContacto-formulario" style="">
			<p><span>Correo: </span><?php the_field('movilContacto', 'option'); ?></p>
			<p><span>Teléfono: </span><?php the_field('correoContacto', 'option'); ?></p>
		</div>
	</div>
	<div class="PrimalContacto-contenidoMapa">
		<?php the_field('mapaContacto', 'option'); ?>
	</div>
</section>