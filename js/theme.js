jQuery(document).ready(function($) {

  // pequeña función para desactivar los eventos en el mapa
  $('.PrimalContacto-contenidoMapa').click(function () {
      $('.PrimalContacto-contenidoMapa iframe').css("pointer-events", "auto");
  });

  $('.PrimalContacto-contenidoMapa').mouseleave(function() { 
    $('.PrimalContacto-contenidoMapa iframe').css("pointer-events", "none"); 
  }); //fin


	// Reduce el header al hacer scrolldown; la animación se realiza con CSS
	$(window).on("scroll touchmove", function () {
		$('#header').toggleClass('Header--tiny', $(document).scrollTop() > 0);
		$('#header-logo img').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-social').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header #searchform').toggleClass('u-remove', $(document).scrollTop() > 0);
    $('#header #header-frase').toggleClass('u-remove', $(document).scrollTop() > 0);
    $('#header #header-before').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header-main-nav').toggleClass('tiny', $(document).scrollTop() > 0);
    $('#home-slider').toggleClass('tiny', $(document).scrollTop() > 0); 	
    $('#contenedor-principal').toggleClass('tiny', $(document).scrollTop() > 0); 
	});
	
	// Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');


	//Agrega una animación al hacer scroll al llegar a un elemento gracias a waypoints

	$('.titulo').waypoint(function(direction) {
	  $('.titulo').addClass( 'fadeInUp animated' );
	},{
	  offset:'20%'
	});

	//Invocamos a los sliders en modo de ataque
	// [Slider full]
  	$('#slider-full').flexslider({
  	  animation: "slide"
  	});

    $('#slider-full-mul').flexslider({
      animation: "slide"
    });

  	// [Slider galería]
  	// --Imágenes principales
  	$('#slider-gallery-thumbnav').flexslider({
  	  animation: "slide",
  	  controlNav: false,
  	  animationLoop: false,
  	  slideshow: false,
  	  itemWidth: 137.5,
  	  asNavFor: '#slider-gallery'
  	});

  	// --Imágenes de navegación
  	$('#slider-gallery').flexslider({
  	  animation: "slide",
  	  controlNav: false,
  	  animationLoop: false,
  	  slideshow: false,
  	  sync: "#slider-gallery-thumbnav"
  	});

    // [Slider noticias]
    // --Imágenes principales
    $('#news-slider-thumbnav').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav: false,
      animationLoop: true,
      slideshow: true,
      itemWidth: 147,
      asNavFor: '#news-slider'
    });

    // --Imágenes de navegación
    $('#news-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: true,
      directionNav: false,
      slideshow: true,
      prevText: "",
      nextText: "",
      sync: "#news-slider-thumbnav"
    });

    // [Slider videos]
    $('#slider-video').flexslider({
      animation: "slide",
      prevText: "",
      nextText: ""
    });

    // [Slider filmstrip]
    $('#slider-filmstrip').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        itemWidth: 300,
        controlNav: false,
        prevText: "",
        nextText: ""
    });

    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });

    // imgrid customization

    $("#imgrid-portfolio").imgrid({
      thumbSize: 300,
      thumbHoverEffect: "lexi",
      thumbLightbox: false
    });

    $('#filter-button').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'group1'); //Note that group1 not carries '.'
    })

    $('#unfilter-button').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'all'); //Note that group1 not carries '.'
    })

});