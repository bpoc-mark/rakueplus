"use strict";

$('.cont_slider').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  mobileFirst: true,
  responsive: [{
    breakpoint: 750,
    settings: 'unslick'
  }]
});