var swiperContainer = document.querySelector(".default_products");
var slides = document.querySelectorAll(".default_products .swiper-slide");
if (swiperContainer && slides.length > 0) {
  // Initialize Swiper only if elements are present
  var swiper = new Swiper(".default_products", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2000, // 2 seconds delay for autoplay
    },
    breakpoints: {
      768: {
        enabled: false, // Disables Swiper on screens >= 768px
      },
    },
  });
}

var swiperContainer1 = document.querySelector(".hero_products");
var slides2 = document.querySelectorAll(".hero_products .swiper-slide");

if (swiperContainer1 && slides2.length > 0) {
  // Initialize Swiper only if elements are present
  var swiper2 = new Swiper(".hero_products", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 222000, // 2 seconds delay for autoplay
    },
    breakpoints: {
      768: {
        enabled: false, // Disables Swiper on screens >= 768px
      },
    },
  });
}
var swiperContainer3 = document.querySelector(".new_products");
var slides3 = document.querySelectorAll(".new_products .swiper-slide");

if (swiperContainer3 && slides3.length > 0) {
  var swiper3 = new Swiper(".new_products", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

var swiperContainer4 = document.querySelector(".new_products2");
var slides4 = document.querySelectorAll(".new_products2 .swiper-slide");

if (swiperContainer4 && slides4.length > 0) {
  var swiper4 = new Swiper(".new_products2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

var swiperContainer5 = document.querySelector(".new_products3");
var slides5 = document.querySelectorAll(".new_products3 .swiper-slide");

if (swiperContainer5 && slides5.length > 0) {
  var swiper5 = new Swiper(".new_products3", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}
var swiperContainer6 = document.querySelector(".new_products5");
var slides6 = document.querySelectorAll(".new_products5 .swiper-slide");

if (swiperContainer6 && slides5.length > 0) {
  var swiper6 = new Swiper(".new_products5", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}
var swiperContainer7 = document.querySelector(".slider_mobile_1");
var slides7 = document.querySelectorAll(".slider_mobile_1 .swiper-slide");

if (swiperContainer7 && slides5.length > 0) {
  var swiper7 = new Swiper(".slider_mobile_1", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}
var swiperContainer8 = document.querySelector(".slider_mobile_2");
var slides8 = document.querySelectorAll(".slider_mobile_2 .swiper-slide");

if (swiperContainer8 && slides5.length > 0) {
  var swiper8 = new Swiper(".slider_mobile_2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}
var swiperContainer9 = document.querySelector(".slider_mobile_3");
var slides9 = document.querySelectorAll(".slider_mobile_3 .swiper-slide");

if (swiperContainer9 && slides5.length > 0) {
  var swiper9 = new Swiper(".slider_mobile_3", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

var swiperContainer10 = document.querySelector(".slider_mobile_4");
var slides10 = document.querySelectorAll(".slider_mobile_4 .swiper-slide");

if (swiperContainer10 && slides5.length > 0) {
  var swiper10 = new Swiper(".slider_mobile_4", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

var swiper11 = new Swiper(".mobile_wrapper-2", {
  slidesPerView: "2.3",
  spaceBetween: 10,
  freeMode: true, // Allows draggable scrolling
});

var swiperContainer11 = document.querySelector(".default_products2");
var slides11 = document.querySelectorAll(".default_products2 .swiper-slide");

if (swiperContainer11 && slides11.length > 0) {
  var swiper11 = new Swiper(".default_products2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}

var swiperContainer12 = document.querySelector(".slider_mobile_8");
var slides12 = document.querySelectorAll(".slider_mobile_8 .swiper-slide");

if (swiperContainer12 && slides12.length > 0) {
  var swiper12 = new Swiper(".slider_mobile_8", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      prevEl: ".fixed-arrow",
    },
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  });
}
