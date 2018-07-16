'use strict';

$(document).ready(function () {
	setTimeout(function() {
		main();
	}, 1000);
	cartActions();
	updateCartItems();
	showMore("[data-mh='product-item']", ".view-more", 12);
	if ($(window).width() > 768) {
		showMoreText(".text-ellipses", 550);
	} else {
		showMoreText(".text-ellipses", 250);
	}
	showMoreText(".float-bar h3", 30);
	$('.matchheight').matchHeight();
	tabsSystem();
	sliders();
	productActions();
	if ($(".product-available__items").length > 0) {
		availableColorProducts();
	}
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

	$(".btn-target").click(function () {
		var target = $(this).attr("data-target");
		$(target).fadeIn(400, function () {
			$(this).show();
		});
		return false;
	});

	$(".btn-close").click(function () {
		var target = $(this).attr("data-target");
		$(target).fadeOut(400, function () {
			$(this).hide();
		});
		return false;
	});



});

$(window).resize(function () {
	main();

	if ($(window).width() < 768) {
		// mobile
		$('.ZoomContainer').remove();

		showMoreText(".text-ellipses", 250);

	} else {
		// desktop
		showMoreText(".text-ellipses", 550);
	}
});

$(window).scroll(function () {
	
	if ($(".float-bar").length) {
		// floatBar();
	}

});

function main() {
	var image_banner_size = $(".institutional-banner .image-bg");
	var swiper_banner_size = $(".swiper-container .image-bg");
	

	$("main").css({
		"min-height": $(window).outerHeight() - $("footer").outerHeight()
	});

	if ($("#pArea").length) {
		$("#pArea").css({
			"min-height": $(window).outerHeight()  - $("footer").outerHeight()
		});
	}

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
			"min-height": $(window).height() - 110 - $("header").outerHeight()
		});
		image_banner_size.css({
			"min-height": $(window).height() / 2 + 100 - $("header").outerHeight()
		});
	}

}
// função para me devolver o numero de items adicionados ao carrinho
function updateCartItems() {
	var list_items = $(".side-cart__list li").length;

	if (list_items > 0) {
		$(".cart-shopping").addClass("has-items");
		$(".cart-shopping span").html(list_items);
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
		$(".btn-menu").removeClass("active");
		$("header").removeClass("open");
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
	$(".side-cart__del:not(.side-cart__del-tr)").click(function () {
		$(this).parent().parent().fadeOut(300, function () {
			$(this).remove();
			updateCartItems();
		});
		return false;
	})

	$(".side-cart__del-tr").click(function () {
		$(this).closest("tr").fadeOut(300, function () {
			$(this).remove();
			updateCartItems();
		});
		return false;
	})
}

// esta variavel é declarada fora do scroll para nao sofrer alterações nos valores ao fazer scroll
var footerPosition = $("footer").offset().top - $("footer").outerHeight();
var floatBar = () => {
	var windowPosition = $(window).scrollTop();
	var buyButtonPosition = $('.product-detail__buy').offset().top / 2;
	var screenSize = window.matchMedia('(min-width: 992px)');
	// detalhe de produto
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
		dots: true,
	});
}

var addToCart = () => {

}
// contem todas as accoes no produto, clicks, etc..
var productActions = () => {
	$(".available__items .item").click(function () {
		// color
		var colorItem = $(this).attr("data-color");

		// toggle item selected
		if ($(this).hasClass("item-active")) {
			$(".available__items .item").removeClass("item-active");
			$(this).removeClass("item-active");
			// empty -> removes color from input
			$("#color_available").val('');
		} else {
			$(".available__items .item").removeClass("item-active");
			$(this).addClass("item-active");
			// add color to input
			$("#color_available").val(colorItem);
		}

	});
}

var availableColorProducts = () => {
	// definir a cor para produto que existem opcao de cores
	$(".available__items .item").each(function () {
		var color = $(this).attr("data-color");
		$(this).css({
			"background-color": color
		});
	});
}