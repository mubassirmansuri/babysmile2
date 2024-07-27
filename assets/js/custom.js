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

$('.planned-project-slider-wrapper').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1.1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});
