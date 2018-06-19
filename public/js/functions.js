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
function checkScroll(element1,element2) {
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
function parallaxHoverJS(element){
  var movementStrength = 40;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();

  $(element).mousemove(function(e){
    var pageX = e.pageX - ($(window).width() / 2);
    var pageY = e.pageY - ($(window).height() / 2);
    var newvalueX = width * pageX * -1 - 25;
    var newvalueY = height * pageY * -1 - 50;

    $('#example').css({"left" : newvalueX +"px", "top" : newvalueY+"px", "bottom" : "0", "right":"auto"});
  });

}

function affixItem( fixedItem, stopPosition, top ){
  $(fixedItem).affix({
    offset:{
        top: top, // set the value
        bottom:  function(){ return ( this.bottom = $(document).height() - $(stopPosition).offset().top ) }
    } 
  });
}