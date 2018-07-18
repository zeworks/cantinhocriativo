"use strict";

function smoothScroll(button, navbarHeight) {
	$(button).on("click", function () {
		if ($(this).is("[data-target]")) {
			var target = $(this).attr('data-target');
		}
		if ($(this).is("[href]")) {
			var target = $(this).attr('href');
		}
		$('html, body').animate({
			scrollTop: $(target).offset().top - navbarHeight
		}, 350);
		return false;
	});
}

function biggestHeight(item, setCount, viewport) {
	item.removeAttr('style');
	if (viewport) {
		for (var i = 0; i < item.length; i += setCount) {
			var curSet = item.slice(i, i + setCount),
				maxHeight = 0;
			curSet.each(function () {
				if ($(this).outerHeight() > maxHeight) {
					maxHeight = $(this).outerHeight();
				}
			}).css('height', maxHeight);
		}
	}
}

// INPUTS VALIDATION
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

// show element in certain momment
function checkScroll(element1, element2) {
	if ($(element1)[0]) {
		var el = $(element1);
		var top_of_object = el.offset().top;
		var bottom_of_object = el.offset().top + el.outerHeight();
		var top_of_window = $(window).scrollTop();
		var bottom_of_window = $(window).scrollTop() + $(window).height();

		if (top_of_window <= bottom_of_object && bottom_of_window >= top_of_object) {
			$(element2).addClass('show');
		} else {}
	}
}

// parallax effect on hover element
function parallaxHoverJS(element) {
	var movementStrength = 40;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();

	$(element).mousemove(function (e) {
		var pageX = e.pageX - $(window).width() / 2;
		var pageY = e.pageY - $(window).height() / 2;
		var newvalueX = width * pageX * -1 - 25;
		var newvalueY = height * pageY * -1 - 50;

		$('#example').css({
			"left": newvalueX + "px",
			"top": newvalueY + "px",
			"bottom": "0",
			"right": "auto"
		});
	});
}

// CALL IT ON DOCUMENT READY AND ON WINDOW SCROLL - TO GET ALWAYS THE ATUAL POSITION OF THE SCROLL.
function affixItem(fixedItem, stopPosition) {

	var scroll = $(window).scrollTop() + $(fixedItem).outerHeight() + $("header").outerHeight() + 80;

	if (scroll < $(stopPosition).offset().top) {

		$(fixedItem).addClass("affixed"); // while scrolling
		$(fixedItem).removeClass("affixed-bottom"); // when is on bottom
	} else if (scroll >= $(stopPosition).offset().top) {

		$(fixedItem).addClass("affixed-bottom");
		$(fixedItem).removeClass("affixed");
	}

	if (scroll == 0) {
		$(fixedItem).removeClass("affixed");
	}
}
// set the element as class, to be generally used. set the button that will be clicked to execute this function and set the MAX of items to list...
function showMore(element, button, max) {
	var list = $(element);
	var numToShow = max;
	var button = $(button);
	var numInList = list.length;
	list.hide();
	if (numInList > numToShow) {
		button.show();
	} else if (numInList <= numToShow) {
		button.hide();
	}

	list.slice(0, numToShow).show();

	button.click(function () {
		var showing = list.filter(':visible').length;
		list.slice(showing - 1, showing + numToShow).fadeIn();
		var nowShowing = list.filter(':visible').length;
		if (nowShowing >= numInList) {
			button.hide();
		}
		return false;
	});
}
// function to only add the ellipses to the text, this doesnt toggle.
function showMoreText(e, m) {
	var max = m;
	$(e).each(function () {
		var e = $(this).html();
		if (e.length > max) {
			var t = e.substr(0, max),
				o = (e.substr(max, e.length - max), t + '<span class="moreellipses">...&nbsp;</span>');
			$(this).html(o);
		}
	});
}

/***********************************
 * 
 * General Form Validation Function
 *
 **/

function initValidation() {

	var errorClass = 'error';
	var successClass = 'success';
	var regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	$('form.validate-form').each(function () {

		var form = $(this).attr('novalidate', 'novalidate');
		var successFlag = true;
		var inputs = form.find('input, textarea, select');

		// form validation function
		function validateForm(e) {
			successFlag = true;
			form.find('.warnings .success').hide();
			inputs.each(checkField);

			if (!successFlag) {
				form.find('.warnings .error').show();
				e.preventDefault();
			}
		}

		// check field
		function checkField(i, obj) {

			var currentObject = $(obj);
			var currentParent = currentObject.parent();

			// not empty fields
			if (currentObject.hasClass('required')) {
				//setState(currentParent, currentObject, !currentObject.val().length || currentObject.val() === currentObject.prop('defaultValue'));
				setState(currentParent, !currentObject.val().length);
			}
			// radio button
			if (currentObject.hasClass('required-radio')) {
				var name = currentParent.attr('name');
				//setState(currentParent, currentObject, !currentObject.val().length || currentObject.val() === currentObject.prop('defaultValue'));
				setState(currentParent.parent(), !$('input[name="' + name + '"]:checked').length);
			}

			// correct email fields
			if (currentObject.hasClass('required-email')) {
				setState(currentParent, !regEmail.test(currentObject.val()));
			}

			if (currentObject.hasClass('confirm-password')) {
				if (currentObject.closest('form').find('.password').val() != currentObject.val()) {
					setState(currentParent, true);
				}
			}
			// correct input file fields
			if (currentObject.hasClass('required-file')) {
				setState(currentObject, !currentObject.val().length || currentObject.val() === currentObject.prop('defaultValue'));
			}
		}

		// set state
		function setState(field, error) {
			field.removeClass(errorClass).removeClass(successClass);
			if (error) {
				field.addClass(errorClass);
				field.one('focus', function () {
					field.removeClass(errorClass).removeClass(successClass);
				});
				successFlag = false;
			} else {
				field.addClass(successClass);
			}
		}

		// form event handlers
		form.submit(validateForm);
	});
}

/***********************************
 * 
 * Cookies functions
 *
 **/

function createCookie(name, value, days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
		var expires = '; expires=' + date.toGMTString();
	} else var expires = '';
	document.cookie = name + '=' + value + expires + '; path=/';
}

function readCookie(name) {
	var nameEQ = name + '=';
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1, c.length);
		}
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name, '', -1);
}
// Cookies functions END
'use strict';
window.addEventListener('load', function (event) {

	// $(".loading").addClass("in-load");



});
$('.menu__item__link, a.btn').click(function (e) {
	e.preventDefault();
	$('.loading').addClass('leaving-page');
	var eventLink = this.getAttribute('href');
	setTimeout(function () {
		// Go to requested page
		window.location.href = eventLink;
	}, 1000);

});
$(document).ready(function () {
	setTimeout(function () {
		main();
	}, 100);
	setTimeout(function () {
		$(".loading").addClass("loaded");
	}, 900);

	cartActions();
	updateCartItems();
	showMore("[data-mh='product-item']", ".view-more", 12);
	if ($(window).width() > 768) {
		showMoreText(".text-ellipses", 550);
	} else {
		showMoreText(".text-ellipses", 250);
	}
	showMoreText(".float-bar h3", 30);
	showMoreText(".product-card__smalltext *", 190);
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
		cursor: 'crosshair'
	};

	$(".product-carousel").owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		items: 1,
		startPosition: 'URLHash',
		URLhashListener: true,
		smartSpeed: 800
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

	$(".open-modal").on("click", function () {
		var target = $(this).attr("data-target");
		$("body").addClass("in-modal");
		$(target).addClass("modal-active");
	});

	$("#shareRoundIcons").jsSocials({
		showLabel: false,
		url: window.location.href,
		shares: [{
			share: "facebook",
			logo: "fab fa-facebook-f"
		}, {
			share: "googleplus",
			logo: "fab fa-google-plus-g"
		}, {
			share: "pinterest",
			logo: "fab fa-pinterest-p"
		}]
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
			"min-height": $(window).outerHeight() - $("footer").outerHeight()
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
	});

	$(".side-cart__del-tr").click(function () {
		$(this).closest("tr").fadeOut(300, function () {
			$(this).remove();
			updateCartItems();
		});
		return false;
	});
}

// esta variavel é declarada fora do scroll para nao sofrer alterações nos valores ao fazer scroll
var footerPosition = $("footer").offset().top - $("footer").outerHeight();
var floatBar = function floatBar() {
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
};

// metodos de pagamento
$(".payment-methods li").click(function () {
	$(".payment-methods li").removeClass("active");
	$(this).addClass("active");
});

$(".btn-menu").click(function () {
	$(this).toggleClass("active");
	$("header").toggleClass("open");
});

var tabsSystem = function tabsSystem() {
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
};

var sliders = function sliders() {
	$(".owl-carousel:not(.product-carousel)").owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		smartSpeed: 800,
		autoplayTimeout: 5000,
		autoHeight: true,
		dots: true
	});
};

var addToCart = function addToCart() {};
// contem todas as accoes no produto, clicks, etc..
var productActions = function productActions() {
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
};

var availableColorProducts = function availableColorProducts() {
	// definir a cor para produto que existem opcao de cores
	$(".available__items .item").each(function () {
		var color = $(this).attr("data-color");
		$(this).css({
			"background-color": color
		});
	});
};