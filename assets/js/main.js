'use strict';

$(document).ready(function () {
	main();
	cartActions();
	updateCartItems();
	showMore("[data-mh='product-item']", ".view-more", 12);
	showMoreText(".text-ellipses", 550);
	showMoreText(".float-bar h3", 30);
	$('.matchheight').matchHeight();
	tabsSystem();
	sliders();
	// Forms validation
	initValidation();

	var zoomOptions = {
		// control zoom with mousewheel
		scrollZoom: true,
		// if zoom inside
		zoomType: 'inner',
		cursor: 'crosshair',
	}

	$(".product-carousel").owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		items: 1,
		startPosition: 'URLHash',
		URLhashListener: true,
		smartSpeed: 800,
	}).on('translated.owl.carousel', function (event) {
		var screenSize = window.matchMedia('(min-width: 992px)');
		if (screenSize.matches) {
			$('.ZoomContainer').remove();
			$('.owl-item.active .zoom-image').ezPlus(zoomOptions);
		}
	});

	setTimeout(function () {
		var screenSize = window.matchMedia('(min-width: 992px)');
		if (screenSize.matches) {
			$('.owl-item.active .zoom-image').ezPlus(zoomOptions);
		}
	}, 100);

	// Show Cookies if not accepted already
	if (!readCookie('eucookie')) {
		$('.cookies-bar').css({
			'display': 'block'
		});
	}

	// Click to accept and close cookies
	$('#removecookie').on('click', function (e) {
		e.preventDefault();
		createCookie('eucookie', 'eucookie', 365 * 10);
		$('.cookies-bar').slideUp('slow', function () {
			$('.cookies-bar').remove();
		});
	});

	//
	// Google Invisible Recaptcha
	//

	if (typeof sitekey !== 'undefined') {

		var recaptcha_ids = [];
		var contador = 0;
		var onloadCallback = function onloadCallback() {
			$('.invisible-recaptcha').each(function () {
				var $key = $(this).data('sitekey');
				var $form = $(this).closest('form').attr('id');

				temp_cena = grecaptcha.render($(this).attr('id'), {
					'sitekey': sitekey,
					'callback': function callback(token) {
						if (!$('#' + $form)[0].checkValidity()) {
							$('#' + $form + ' :input:visible[required="required"]').each(function () {
								if (!this.validity.valid) {
									$(this).parent().addClass('error');
									// break
									// return false;
								} else {
									$(this).parent().removeClass('error');
								}
							});

							// reset recaptchas
							var contador2 = 0;
							$('.g-recaptcha').each(function () {
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
			init: function init() {
				setTimeout(function () {
					$(".swiper-slide-active .wrapper-slide").addClass("animated fadeInUp");
				}, 800);
			}
		},
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		}
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

	if ($(window).width() < 768) {
		$(".menu").css({
			top: $("header").outerHeight()
		});

		$('.ZoomContainer').remove();
	} else {
		$(".menu").removeAttr("style");
	}
});

$(window).scroll(function () {
	if ($(".float-bar").length) {
		floatBar();
	}
});

function main() {
	var image_banner_size = $(".institutional-banner .image-bg");
	var swiper_banner_size = $(".swiper-container .image-bg");

	$("main").css({
		"margin-top": $("header").outerHeight(),
		"min-height": $(window).outerHeight() - $("header").outerHeight() - $("footer").outerHeight()
	});
	if ($(window).width() < 768) {
		// mobile

		// se for apenas uma imagem institucional
		image_banner_size.css({
			"min-height": 175 + "px"
		});
		// se for um carrousel
		swiper_banner_size.css({
			"min-height": $(window).height() - $("header").outerHeight()
		});
	} else {
		// desktop

		swiper_banner_size.css({
			"min-height": $(window).height() / 2 + 100 - $("header").outerHeight()
		});
		image_banner_size.css({
			"min-height": $(window).height() / 2 + 100 - $("header").outerHeight()
		});
	}

}
// função para me devolver o numero de items adicionados ao carrinho
function updateCartItems() {
	var numItems = $(".side-cart__list li").length;
	if (numItems > 0) {
		$(".cart-shopping").addClass("has-items");
		$(".cart-shopping span").html(numItems);
	} else {
		$(".cart-shopping").removeClass("has-items");
		$(".cart-shopping span").html('');
	}
}

function cartActions() {
	// click no icon do carrinho no menu
	$(".cart-shopping,.buy-item").click(function (e) {
		$(".side-cart").toggleClass("active");
		e.stopPropagation();
	});
	$(".side-cart").click(function (e) {
		e.stopPropagation();
	});
	// close SIDE CART
	$("body,html").click(function (e) {
		if ($(".side-cart").hasClass("active")) $(".side-cart").removeClass("active");
	});

	$(".side-cart .btn-default").click(function (e) {
		if ($(".side-cart").hasClass("active")) $(".side-cart").removeClass("active");
	});

	$('.qty-plus').click(function () {
		var currQuantity = $(this).closest('.cart-qty').find('.cart-qty__input').val();
		if (parseInt(currQuantity)) {
			$(this).closest('.cart-qty').find('.cart-qty__input').val(parseInt(currQuantity) + 1);
		} else {
			$(this).closest('.cart-qty').find('.cart-qty__input').val(1);
		}
	});

	$('.qty-less').click(function () {
		var currQuantity = $(this).closest('.cart-qty').find('.cart-qty__input').val();
		if (parseInt(currQuantity) && parseInt(currQuantity) > 1) {
			$(this).closest('.cart-qty').find('.cart-qty__input').val(parseInt(currQuantity) - 1);
		} else {
			$(this).closest('.cart-qty').find('.cart-qty__input').val(1);
		}
	});

	// para remover os items do carrinho
	$(".side-cart__del").click(function () {
		$(this).parent().remove();
		updateCartItems();
		return false;
	})
}

// esta variavel é declarada fora do scroll para nao sofrer alterações nos valores ao fazer scroll
var footerPosition = $("footer").offset().top - $("footer").outerHeight();
var floatBar = () => {
	var windowPosition = $(window).scrollTop();
	var buyButtonPosition = $('.product-detail__buy').offset().top / 2;
	var screenSize = window.matchMedia('(min-width: 768px)');

	if (screenSize.matches) {
		if (windowPosition > buyButtonPosition && windowPosition < footerPosition) {
			$('.float-bar').slideDown();
		} else {
			$('.float-bar').slideUp();
		}
	} else {
		$('.float-bar').slideUp();
	}
}

// metodos de pagamento
$(".payment-methods li").click(function () {
	$(".payment-methods li").removeClass("active");
	$(this).addClass("active");
});

$(".btn-menu").click(function () {
	$(this).toggleClass("active");
	$("header").toggleClass("open");
	$(".menu").css({
		top: $("header").outerHeight()
	});
});

var tabsSystem = () => {
	// toggle the active tab
	$(".tabs__btn").click(function (e) {
		// para mover a span para indicar o item activo
		$(this).closest(".tabs__head").find(".item-selected").css({
			transform: "translateX(" + $(this).position().left + "px)"
		});

		// para mostrar o item activo
		var target = $(this).attr("href");
		$(".tabs__body_item").hide();
		$(target).show();

		// set all unselected
		$(".tabs__btn").removeClass("selected");
		// // open the tabs select
		$(".tabs__head").toggleClass("open");
		// // set the selected tab item
		$(this).addClass("selected");

		return false;
	});
	// // MOBILE
	if ($(window).width() < 768) {
		$(".tabs__head").click(function () {
			$(this).toggleClass("open");
		});
		$("body,html").click(function (e) {
			if ($(".tabs__head").hasClass("open")) $(".tabs__head").removeClass("open");
		});
	}

}

var sliders = () => {
	$(".owl-carousel:not(.product-carousel)").owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		smartSpeed: 800,
		autoplayTimeout: 5000,
		autoHeight: true,
		dots: true
	});
}