<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>

<section class="PrimalSlider u-contenedorCompleto">
    <div id="slider-full" class="flexslider PrimalSlider-contenido">
      <ul class="slides">
        <?php while(have_rows('sliderHome', 'option')) : the_row(); ?>
          <li class="PrimalSlider-slide">
            <img class="PrimalSlider-slideImagen" src="<?php the_sub_field('imgBg', 'option'); ?>" alt="" />
            <div class="PrimalSlider-slideCaption">
              <h2 class="PrimalSlider-slideTitulo">Lorem ipsum dolor sit amet.</h2>
              <h3 class="PrimalSlider-slideSubtitulo">Lorem ipsum dolor sit amet.</h3>
              <a class="PrimalSlider-slideBoton" href="#">Botón</a>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
</section>
