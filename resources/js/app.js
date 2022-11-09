require('./bootstrap');

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

 
const swiper1 = new Swiper('#swiper1', {
    effect: 'fade',
    lazy: true,
    loop: true,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    pagination: {
      clickable: true,
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: '.btn-next ',
      prevEl: '.btn-prev',
    },
});

const swiper2 = new Swiper('#swiper2', {
    effect: 'fade',
    lazy: true,
    loop: true,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    }
    // pagination: {
    //   clickable: true,
    //   el: ".swiper-pagination",
    // },
    // navigation: {
    //   nextEl: '.btn-next ',
    //   prevEl: '.btn-prev',
    // },
});

