var swiper = new Swiper(".swiper-container", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  autoplay: {
    delay: 5000,
  },
});

var slider3 = new Swiper(".banner_carousel", {
  effect: "slide",

  pagination: {
    el: ".swiper-pagination",
  },
});

const swiper2 = new Swiper(".tab-1", {
  slidesPerView: 5,
  slidesPerColumn: 2,
  spaceBetween: 30,
  slidesPerGroup: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  // Responsive breakpoints
  
});

const swiper4 = new Swiper(".slider-seller", {
  slidesPerView: 5,
  spaceBetween: 20,
  slidesPerGroup: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

const swiper5 = new Swiper(".brand-item", {
  slidesPerView: 8,
  spaceBetween: 30,
});
