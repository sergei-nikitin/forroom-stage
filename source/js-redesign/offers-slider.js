'use strict';

const offersSlider = new Swiper('.offers__slides-slider', {
	loop: true,
	slidesPerView: 1,
	speed: 400,
	effect: "fade",
	// autoplay: {
	// 	delay: 2500,
	// 	disableOnInteraction: false,
	// },
	navigation: {
		nextEl: '.offers__slides-btns .swiper-button-next',
		prevEl: '.offers__slides-btns .swiper-button-prev',
	},
});  