function smoothScroll(button, navbarHeight) {
  $(button).on("click", function () {
    if ($(this).is("[data-target]")) {
      var target = $(this).attr('data-target');
    }
    if ($(this).is("[href]")) {
      var target = $(this).attr('href');
    }
    $('html, body').animate({
      scrollTop: $(target).offset().top - navbarHeight,
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
    } else {

    }
  }
}

// parallax effect on hover element
function parallaxHoverJS(element) {
  var movementStrength = 40;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();

  $(element).mousemove(function (e) {
    var pageX = e.pageX - ($(window).width() / 2);
    var pageY = e.pageY - ($(window).height() / 2);
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
      $(this).html(o)
    }
  })
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
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = '; expires=' + date.toGMTString();
  } else
    var expires = '';
  document.cookie = name + '=' + value + expires + '; path=/';
}

function readCookie(name) {
  var nameEQ = name + '=';
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ')
      c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0)
      return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name, '', -1);
}
// Cookies functions END