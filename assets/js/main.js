$(document).ready(function(){
	main();
	$(function() {
		$('.matchheight').matchHeight();
	});

	// Show Cookies if not accepted already
	if( !readCookie('eucookie') ){
        $('.cookies-bar').css({'display': 'block'});
	}
	
	// Click to accept and close cookies
    $('#removecookie').on('click', function (e) {
		e.preventDefault();
        createCookie('eucookie', 'eucookie', 365 * 10);
        $('.cookies-bar').slideUp('slow', function () {
            $('.cookies-bar').remove();
        });
    });

	// Forms validation
	initValidation();

	//
	// Google Invisible Recaptcha
	//
	
	if ( typeof sitekey !== 'undefined' ) {

		var recaptcha_ids = [];
		var contador = 0;
		var onloadCallback = function() {
			$( '.invisible-recaptcha' ).each(function() {
				var $key  = $(this).data('sitekey');
				var $form = $(this).closest('form').attr('id');
 
				temp_cena = grecaptcha.render($(this).attr('id'), {
					'sitekey' : sitekey,
					'callback' : function(token){
						if(!$('#' + $form)[0].checkValidity()) {
							$('#' + $form + ' :input:visible[required="required"]').each(function(){
								if( !this.validity.valid ) {
									$(this).parent().addClass('error');
									// break
									// return false;
								} else {
									$(this).parent().removeClass('error');
								}
							});
 
							// reset recaptchas
							var contador2 = 0;
							$('.g-recaptcha').each(function(){
								grecaptcha.reset(recaptcha_ids[contador2]);
								contador2++;
							});
							// reset recaptchas END
						} else {
							$('#' + $form).submit();
						}
 
					}
				});
 
				recaptcha_ids.push(temp_cena);
				contador++;
			});

		}; // end callback

	}
	

	var swiper = new Swiper('.swiper-container', {
		loop: true,
		speed: 1000,
		effect: "fade",
		on: {
			init: function(){
				setTimeout(function () {
					$(".swiper-slide-active .wrapper-slide").addClass("animated fadeInUp");
				}, 800);
			}
		},
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	swiper.on('slideChange', function () {
		$(".swiper-slide .wrapper-slide").removeClass("animated fadeInUp");
		setTimeout(function () {
			$(".swiper-slide-active .wrapper-slide").addClass("animated fadeInUp");
		}, 800);
	});
	
	
});
$(window).resize(function () {
	main();
})
function main() {
	// var main = $("main");

	// main.css({
	// 	"margin-top": $("header").outerHeight()
	// });
	

	var image_banner_size = $(".image-bg");
	
	if($(window).width() < 768){
		image_banner_size.css({
			"min-height": $(window).height() - $("header").outerHeight()
		});
	}else{
		image_banner_size.css({
			"min-height": ($(window).height() / 2 + 100) - $("header").outerHeight() 
		});
	}
	
}