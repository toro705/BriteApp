var App = function () {
	return {
		WOW: function () {
			new WOW().init();
		},

		hamburger: function() {
			$('.hamburger').click(function(){
				$(this).toggleClass('is-active');
			});			
			$('.dropdown-toggle').click(function(){
				$(this).parent().toggleClass('open');
			});

		},	
		slick: function () {
		      $('.slidervertical').slick({
		        vertical: true,
		        infinite: true,
		        slidesToShow: 1,
  				slidesToScroll: 1,
  				dots: false,
  				arrows: false,
  				autoplay: true
		      });
		},
		navButtonColorChange: function() {
  			var previousScroll = 0;
            $( window ).scroll(function(){
                var nav = $('.hamburger-inner');
                // var detail = $('.suscribe'
                windowHeight = $(window).outerHeight();
                windowHeightFix = windowHeight - 40;
                // console.log(windowHeightFix);
                var currentScroll = $(this).scrollTop();
                if( $(window).scrollTop() > windowHeightFix){
                    // nav.slideUp();
                    // $('.duracion_1').css('margin-top','25px!important' );
                    // console.log('scroll');
                    nav.addClass('scroll');
                    
                }else{
                    nav.removeClass('scroll');
                    // console.log('hero');
                    // nav.slideDown();
                    // $('.suscribe h3').fadeOut();
                }
                // if( $(window).scrollTop() > 750) {
                //         $('.suscribe h3').addClass('hidden-sm');
                //         $('.suscribe h3').addClass('hidden-xs');
                // } else {
                //         $('.suscribe h3').removeClass('hidden-sm');
                //         $('.suscribe h3').removeClass('hidden-xs');                    
                // }
            });
		},
		preloader: function() {
                $('.preloader-container').css('opacity', 0, 100);
				setTimeout(function(){
			        $('.preloader-container').remove();
    			}, 200);		
		},		
		navScroll: function() {
			$( window ).scroll(function(){
				var $cabecera = $('.main-nav');
				if( $(window).scrollTop() > 20){
					$cabecera.addClass('scroll');
				}else{
					$cabecera.removeClass('scroll');
				}
			});
			$('.main-nav .navbar-nav a').bind('click', function(event) {
			        var $anchor = $(this);
			        $('html, body').stop().animate({
			            scrollTop: $($anchor.attr('href')).offset().top
			        }, 1500, 'easeInOutExpo');
			        event.preventDefault();
			    });			
			$('.main-nav .navbar-nav a').bind('click', function(event) {
				$('.hamburger').toggleClass('is-active');
		    });			
		},
		formContact: function () {
			$( "#contact-form" ).on( "submit", function( event ) {
			  event.preventDefault();
			  // console.log( $( this ).serializeArray() );
			  var mailArray =  $( this ).serializeArray();
			  $.ajax({
		           type: "POST", 
		           url: "contact-mailer.php",
		           dataType: "json",
		           data: mailArray,
		           success: function (msg) {
		           		if (msg.success) {
		           			// console.log('enviado');
		           			$('#contact-form')[0].reset();
		           			$('#contact-form').prepend('<p class="paragraph-1">'+msg.msj+'</p>');

		           		} else {
		           			// console.log('fail');
		           		}
		           },

   			  });
			});
		},	
		lightbox: function() {
			lightbox.option({
		      'resizeDuration': 200,
		      'imageFadeDuration': 200,
		      'resizeDuration': 200,
		      'positionFromTop': 10,
		      'albumLabel': 'Works Gallery',
		      'wrapAround': false
		    });
		},
		modalStatic: function() {
			$('#referencias .modal').modal({
			  backdrop: false
			})
		},
		onload: function () {
			App.preloader();
		},	
		onResize: function()	{

		},
		init: function () {
			App.hamburger();
			App.WOW();
			App.slick();
			App.lightbox();
			App.navButtonColorChange();
			App.navScroll();
		}
	}
}();
jQuery(document).ready(function (){
	App.init();
})
 window.onload = function () {
	App.onload();
};
