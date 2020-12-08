const SwiperBanner = new Swiper('.swiper-container-banner', {
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 500,
  direction: 'horizontal',
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});

const SwiperHightlight = new Swiper('.swiper-container-highlight .swiper-container', {
  slidesPerView: 4,
  spaceBetween: 24,
  speed: 500,
  direction: 'horizontal',
  grabCursor: false,
  loop: true,

  navigation: {
    nextEl: '.swiper-container-highlight .swiper-button-next',
    prevEl: '.swiper-container-highlight .swiper-button-prev',
  },

  breakpoints: {
    1: {
      slidesPerView: 1,
    },
    780: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  }
});

const SwiperTestimony = new Swiper('.swiper-container-testimony .swiper-container', {
  autoHeight: true,
  slidesPerView: 1,
  speed: 900,
  spaceBetween: 0,
  direction: 'horizontal',
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 7000,
    disableOnInteraction: true,
  },
});

const SwiperBrands = new Swiper('.swiper-container-brands .swiper-container', {
  speed: 500,
  direction: 'horizontal',
  grabCursor: true,
  loop: true,

  breakpoints: {
    1: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    780: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 48,
    },
  }
});

const SwiperGallery= new Swiper('.swiper-container-gallery .swiper-container', {
  slidesPerView: 4,
  spaceBetween: 24,
  speed: 500,
  direction: 'horizontal',
  grabCursor: false,
  loop: true,

  navigation: {
    nextEl: '.swiper-container-gallery .swiper-button-next',
    prevEl: '.swiper-container-gallery .swiper-button-prev',
  },

  breakpoints: {
    1: {
      slidesPerView: 1,
    },
    780: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    },
  }
});
