<?php 
/** Columnistas destacados
------------------------------------------------------------------- */ 
?>
<!-- columnistas-destacados -->
<section class="FilmstripSlider u-contenedorCompleto">
	<!-- <div class="wrapper"> -->
	<h2 class="u-block-title"><?php the_field('tituloGaleriaPortada', 'option'); ?></h2>
		<div id="slider-filmstrip" class="flexslider FilmstripSlider-contenido">
		  	<ul class="slides">
		  		<?php while(have_rows('imagenesGaleriaPortada', 'option')) : the_row(); ?>
		  			<li class="FilmstripSlider-slide">
		  				<img class="FilmstripSlider-slideImagen" src="<?php the_sub_field('imagen', 'option'); ?>" alt="">
		  			</li>
		  		<?php endwhile; ?>
		  	</ul>
		</div>
	<!-- </div> -->
</section>