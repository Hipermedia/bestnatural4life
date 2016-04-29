<?php 
/** Botones de compartir en redes sociales. Estilo CLASSIC.
------------------------------------------------------------------- */ 
?>

<div id="header-social" class="social">
    <!-- Facebook -->
    <?php if (get_field('facebookContacto', 'option') != '') { ?>
        <a class="red facebook" href="<?php the_field('facebookContacto', 'option'); ?>" title="Facebook" target="_blank"></a>
    <?php }  ?>
    <!-- Twitter -->
    <?php if (get_field('twitterContacto', 'option') != '') { ?>
        <a class="red twitter" href="<?php get_field('twitterContacto', 'option'); ?>"title="Twitter" target="_blank"></a>
    <?php }  ?>
    <!-- Youtube -->
    <?php if (get_field('youtubeContacto', 'option') != '') { ?>
        <a class="red google" href="<?php get_field('youtubeContacto', 'option'); ?>" title="Youtube" target="_blank"></a>
    <?php }  ?>
    <!-- Google Plus -->
    <?php if (get_field('googleContacto', 'option') != '') { ?>
        <a class="red linkedin" href="<?php get_field('googleContacto', 'option'); ?>" title="Google Plus" target="_blank"></a>
    <?php }  ?>      
</div><!-- #social -->