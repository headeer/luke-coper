(function () {
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
  var swiperContainerBlog2 = document.querySelector(".mobile_blog_2");
  var slidesBlog2 = document.querySelectorAll(".mobile_blog_2 .swiper-slide");
  if (swiperContainerBlog2 && slidesBlog2.length > 0) {
    // Initialize Swiper only if elements are present
    var swiper = new Swiper(".mobile_blog_2", {
      slidesPerView: "auto",
      spaceBetween: 30,
      loop: true,
      navigation: {
        prevEl: ".fixed-arrow",
      },
      breakpoints: {
        768: {
          enabled: false, // Disables Swiper on screens >= 768px
        },
      },
    });
  }
  var splide3 = new Splide(".splide3", {
    perPage: 5,
    next: "splide3 splide__arrow--next fixed-arrow",
    type: "loop",
  });
  document
    .querySelector(".splide3 .fixed-arrow")
    .addEventListener("click", () => {
      console.log("clicked 3");
      splide3.go("+1"); // Trigger the next slide
    });
  splide3.on("mounted moved", () => {
    // Get all visible slides
    setTimeout(() => {
      const visibleSlides = document.querySelectorAll(
        ".splide3 .splide__slide.is-visible"
      );

      // Remove the last-visible class from all slides
      visibleSlides.forEach((slide) => slide.classList.remove("last-visible"));

      // Add the last-visible class to the last visible slide
      const lastVisibleSlide = visibleSlides[visibleSlides.length - 1];
      if (lastVisibleSlide) {
        lastVisibleSlide.classList.add("last-visible");
      }
    }, 300);
  });

  // Mount the Splide instance
  splide3.mount();
  var splide2 = new Splide(".splide2", {
    perPage: 5,
    next: "splide2 splide__arrow--next fixed-arrow",
    type: "loop",
  });
  document
    .querySelector(".splide2 .fixed-arrow")
    .addEventListener("click", () => {
      splide2.go("+1"); // Trigger the next slide
    });
  splide2.on("mounted moved", () => {
    // Get all visible slides
    setTimeout(() => {
      const visibleSlides = document.querySelectorAll(
        ".splide2 .splide__slide.is-visible"
      );

      // Remove the last-visible class from all slides
      visibleSlides.forEach((slide) => slide.classList.remove("last-visible"));

      // Add the last-visible class to the last visible slide
      const lastVisibleSlide = visibleSlides[visibleSlides.length - 1];
      if (lastVisibleSlide) {
        lastVisibleSlide.classList.add("last-visible");
      }
    }, 300);
  });

  // Mount the Splide instance
  splide2.mount();

  var splide4 = new Splide(".splide4", {
    perPage: 5,
    next: "splide4 splide__arrow--next fixed-arrow",
    type: "loop",
  });
  document
    .querySelector(".splide4 .fixed-arrow")
    .addEventListener("click", () => {
      console.log("clicked 4");
      splide4.go("+1"); // Trigger the next slide
    });
  splide4.on("mounted moved", () => {
    // Get all visible slides
    setTimeout(() => {
      const visibleSlides = document.querySelectorAll(
        ".splide4 .splide__slide.is-visible"
      );

      // Remove the last-visible class from all slides
      visibleSlides.forEach((slide) => slide.classList.remove("last-visible"));

      // Add the last-visible class to the last visible slide
      const lastVisibleSlide = visibleSlides[visibleSlides.length - 1];
      if (lastVisibleSlide) {
        lastVisibleSlide.classList.add("last-visible");
      }
    }, 300);
  });

  // Mount the Splide instance
  splide4.mount();

  var splide5 = new Splide(".splide5", {
    perPage: 5,
    next: "splide5 splide__arrow--next fixed-arrow",
    type: "loop",
  });
  document
    .querySelector(".splide5 .fixed-arrow")
    .addEventListener("click", () => {
      console.log("clicked 5");
      splide5.go("+1"); // Trigger the next slide
    });
  splide5.on("mounted moved", () => {
    // Get all visible slides
    setTimeout(() => {
      const visibleSlides = document.querySelectorAll(
        ".splide5 .splide__slide.is-visible"
      );

      // Remove the last-visible class from all slides
      visibleSlides.forEach((slide) => slide.classList.remove("last-visible"));

      // Add the last-visible class to the last visible slide
      const lastVisibleSlide = visibleSlides[visibleSlides.length - 1];
      if (lastVisibleSlide) {
        lastVisibleSlide.classList.add("last-visible");
      }
    }, 300);
  });

  // Mount the Splide instance
  splide5.mount();

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

  // var swiperContainer4 = document.querySelector(".new_products2");
  // var slides4 = document.querySelectorAll(".new_products2 .swiper-slide");

  // if (swiperContainer4 && slides4.length > 0) {
  //   var swiper4 = new Swiper(".new_products2", {
  //     slidesPerView: "auto",
  //     spaceBetween: 30,
  //     loop: true,
  //     speed: 1000,
  //     navigation: {
  //       prevEl: ".fixed-arrow", // Trigger reverse animation
  //     },
  //     breakpoints: {
  //       768: {
  //         slidesPerView: 4,
  //         spaceBetween: 10,
  //       },
  //     },
  //   });
  // }

  var swiperContainer7 = document.querySelector(".slider_mobile_1");
  var slides7 = document.querySelectorAll(".slider_mobile_1 .swiper-slide");

  if (swiperContainer7 && slides7.length > 0) {
    var swiper7 = new Swiper(".slider_mobile_1", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 1000,
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

  if (swiperContainer8 && slides8.length > 0) {
    var swiper8 = new Swiper(".slider_mobile_2", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 1000,
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

  if (swiperContainer9 && slides9.length > 0) {
    var swiper9 = new Swiper(".slider_mobile_3", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 1000,
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

  if (swiperContainer10 && slides10.length > 0) {
    var swiper10 = new Swiper(".slider_mobile_4", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 1000,
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
    slidesPerView: "auto",
    spaceBetween: 10,
    freeMode: true, // Allows draggable scrolling
  });

  var swiperContainer11 = document.querySelector(".default_products2");
  var slides11 = document.querySelectorAll(".default_products2 .swiper-slide");

  if (swiperContainer11 && slides11.length > 0) {
    var swiper11 = new Swiper(".default_products2", {
      slidesPerView: "auto",
      speed: 1000,
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
})();
