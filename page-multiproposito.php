<?php
/**
 * Template Name: Multiproposito
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

<?php if( have_rows('bloquesMultiproposito') ): ?>
<section class="Multiproposito"> 
	<?php while ( have_rows('bloquesMultiproposito') ) : the_row(); ?> 

		<?php if( get_row_layout() == 'slider_layout' ): ?>
			<section class="PrimalSlider u-contenedorCompleto"  id="home-slider">
			   <div id="slider-full-mul" class="flexslider PrimalSlider-contenido">
			      <ul class="slides">
			         <?php while(have_rows('sliderMul')) : the_row(); ?>
			            <li class="PrimalSlider-slide">
			               <img class="PrimalSlider-slideImagen" src="<?php the_sub_field('imgBg'); ?>" alt="" />
			               <div class="PrimalSlider-slideCaption">
			                  <img class="Primalslider-slideImg" src="<?php the_sub_field('img'); ?>" alt=""/>
			                  <div class="PrimalSlider-slideTitles">
			                     <h2 class="PrimalSlider-slideTitulo"><?php the_sub_field('titulo'); ?></h2>
			                     <h3 class="PrimalSlider-slideSubtitulo"><?php the_sub_field('subtitulo'); ?></h3>
			                     <a class="PrimalSlider-slideTexto" href="<?php the_sub_field('urlTexto'); ?>"><?php the_sub_field('texto'); ?></a>
			                     <a class="PrimalSlider-slideBoton" href="<?php the_sub_field('urlBtn'); ?>"><?php the_sub_field('textoBtn'); ?></a>
			                  </div>
			               </div>
			            </li>
			         <?php endwhile; ?>
			      </ul>
			   </div>
			</section>
		<?php endif;  ?> 

		<?php if( get_row_layout() == 'bloques_layout' ): ?>
		<!-- PrimalBloques -->
		<section class="PrimalBlocks">
			<!-- Contenedor -->
			<div class="PrimalBlocks-contenido u-contenedor">
				<!-- Títulos de la sección -->
				<h1 class="PrimalBlocks-titulo u-block-title"><?php the_sub_field('titulo'); ?></h1>
				<?php if( have_rows('beneficios') ): ?>
					<?php while( have_rows('beneficios') ): the_row(); ?>
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
				<a class="PrimalBlocks-contenidoZelda" href="<?php the_field('enlace'); ?>"><?php the_field('texto'); ?></a>
			</div>
		</section>
		<?php endif;  ?> 

		<?php if( get_row_layout() == 'testimonios_layout' ): ?>
		<!-- PrimalBloques -->
		<section class="PrimalTestimony">
			<!-- Contenedor -->
			<div class="PrimalTestimony-contenido u-contenedor">
				<!-- Títulos de la sección -->
				<h2 class="PrimalTestimony-titulo u-block-title"><?php the_sub_field('titulo'); ?></h2>
				
				<?php if( have_rows('testimonios') ): ?>
					<?php while( have_rows('testimonios') ): the_row(); ?>
						<div class="PrimalTestimony-block">
							<figure class="PrimalTestimony-blockFigure">
								<img src="<?php the_sub_field('imagen'); ?>" alt="">
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
		<?php endif;  ?> 

		<?php if( get_row_layout() == 'galeria_layout' ): ?>
		<section class="FilmstripSlider u-contenedorCompleto">
			<!-- <div class="wrapper"> -->
			<h2 class="u-block-title"><?php the_sub_field('titulo'); ?></h2>
				<div id="slider-filmstrip" class="flexslider FilmstripSlider-contenido">
				  	<ul class="slides">
				  		<?php while(have_rows('imagenes')) : the_row(); ?>
				  			<li class="FilmstripSlider-slide">
				  				<img class="FilmstripSlider-slideImagen" src="<?php the_sub_field('imagen'); ?>" alt="">
				  			</li>
				  		<?php endwhile; ?>
				  	</ul>
				</div>
			<!-- </div> -->
		</section>
		<?php endif;  ?> 
	<?php endwhile;  ?>
</section>
<?php endif;  ?> 

<?php get_footer(); ?>
