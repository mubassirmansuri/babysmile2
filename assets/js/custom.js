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

// A $( document ).ready() block.
$(document).ready(function () {
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
})