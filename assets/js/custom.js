$(function () {
  var header = $(".header-area");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      header.addClass("header_sticky");
    } else {
      header.removeClass("header_sticky");
    }
  });
});

