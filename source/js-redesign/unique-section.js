'use strict';

const uniqueSlider = new Swiper('.unique__slider .swiper', {
  loop: false,
  slidesPerView: 1,
  speed: 400,
  //effect: "fade",
  // autoplay: {
  // 	delay: 2500,
  // 	disableOnInteraction: false,
  // },
  navigation: {
    nextEl: '.unique__btns .swiper-button-next',
    prevEl: '.unique__btns .swiper-button-prev',
  },
  watchOverflow: true,
  spaceBetween: 20,
  breakpoints: {
    1280: {
      spaceBetween: 0,
    },
  },
});
