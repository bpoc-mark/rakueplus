"use strict";

// $('.cont_slider').slick({
//       infinite: true,
//       slidesToShow: 2,
//       slidesToScroll: 3,
//       settings: "unslick",
//       responsive: [
//             {
// 				breakpoint: 9999,
// 				settings: "unslick"
//             },
//             {
// 				breakpoint: 750,
// 				settings: {
// 					slidesToShow: 1,
// 					slidesToScroll: 1
// 				}
//             }
//             // You can unslick at a given breakpoint now by adding:
//             // settings: "unslick"
//             // instead of a settings object
//       ]
// });
var settings = {
  // default settings
  responsive: [{
    breakpoint: 9999,
    settings: "unslick"
  }, {
    breakpoint: 750,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true
    }
  }]
};
var sl = $('.slider').slick(settings);
$(window).on('resize', function () {
  if ($(window).width() < 751 && !sl.hasClass('slick-initialized')) {
    $('.cont_slider').slick(settings);
  }
});