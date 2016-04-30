<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>

<section class="PrimalSlider u-contenedorCompleto"  id="home-slider">
   <div id="slider-full" class="flexslider PrimalSlider-contenido">
      <ul class="slides">
         <?php while(have_rows('sliderHome', 'option')) : the_row(); ?>
            <li class="PrimalSlider-slide">
               <img class="PrimalSlider-slideImagen" src="<?php the_sub_field('imgBg', 'option'); ?>" alt="" />
               <div class="PrimalSlider-slideCaption">
                  <img class="Primalslider-slideImg" src="<?php the_sub_field('img', 'option'); ?>" alt=""/>
                  <div class="PrimalSlider-slideTitles">
                     <h2 class="PrimalSlider-slideTitulo"><?php the_sub_field('titulo', 'option'); ?></h2>
                     <h3 class="PrimalSlider-slideSubtitulo"><?php the_sub_field('subtitulo', 'option'); ?></h3>
                     <a class="PrimalSlider-slideTexto" href="<?php the_sub_field('urlTexto', 'option'); ?>"><?php the_sub_field('texto', 'option'); ?></a>
                     <a class="PrimalSlider-slideBoton" href="<?php the_sub_field('urlBtn', 'option'); ?>"><?php the_sub_field('textoBtn', 'option'); ?></a>
                  </div>
               </div>
            </li>
         <?php endwhile; ?>
      </ul>
   </div>
</section>
