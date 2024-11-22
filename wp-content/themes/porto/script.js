// Select necessary elements
const frames = document.querySelectorAll(".frame-22");
const readMoreBtns = document.querySelectorAll(".read-more");
const closeBtns = document.querySelectorAll(".close-btn");
const hideDescriptionBtns = document.querySelectorAll(".ukryj-dodatkowy-opis");
// Function to open the frame-22 container
function openFrame(index) {
  frames[index].classList.add("active");
}
const slides = document.querySelectorAll(
  ".swiper-slide, .t-hero .hero-container"
);

slides.forEach((slide) => {
  slide.addEventListener("mouseenter", function () {
    const zoomImage = slide.querySelector(".product-image-zoom");
    if (zoomImage) {
      zoomImage.style.transform = "scale(1.2)";
      zoomImage.style.opacity = "1";
      zoomImage.style.zIndex = "2";
    }
  });

  slide.addEventListener("mouseleave", function () {
    const zoomImage = slide.querySelector(".product-image-zoom");
    if (zoomImage) {
      zoomImage.style.transform = "scale(1)";
      zoomImage.style.opacity = "0";
      zoomImage.style.zIndex = "-1  ";
    }
  });
});
// Function to close the frame-22 container
function closeFrame(index) {
  frames[index].classList.remove("active");
  closeBtns[index].classList.add("hide");
  setTimeout(() => {
    closeBtns[index].classList.remove("hide");
  }, 300); // Matches CSS transition duration
}

// Add event listeners to all read-more buttons
readMoreBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => openFrame(index));
});

// Add event listeners to all close buttons
closeBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => closeFrame(index));
});

// Add event listeners to all hide description buttons
hideDescriptionBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => closeFrame(index));
});

document.querySelectorAll(".qa-item").forEach((item) => {
  item.addEventListener("click", function () {
    // Close any open item
    document.querySelectorAll(".qa-item").forEach((qa) => {
      if (qa !== item) {
        qa.classList.remove("active");
      }
    });

    // Toggle the clicked item
    item.classList.toggle("active");
  });
});

// Select the scroll-to-top button
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Add click event to scroll to the top
scrollToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
document.body.addEventListener("click", function (event) {
  const clickedIcon = event.target.closest(".wishlist");

  if (clickedIcon) {
    // Remove 'active' class from all wishlist icons
    document.querySelectorAll(".wishlist").forEach((icon) => {
      if (icon !== clickedIcon) {
        icon.classList.remove("active");
      }
    });

    // Toggle 'active' class on the clicked icon
    clickedIcon.classList.toggle("active");
  }
});
var ajaxUrl = document.getElementById("ajax-url").value;

document.querySelectorAll(".wishlist").forEach(function (wishlist) {
  wishlist.addEventListener("click", function () {
    var productId = this.dataset.productId;
    var action = this.classList.contains("active") ? "remove" : "add";

    var data = {
      action: "update_wishlist",
      product_id: productId,
      wishlist_action: action,
    };

    fetch(ajaxUrl, {
      // Use the ajaxUrl from the hidden input
      method: "POST",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams(data).toString(),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          // this.classList.toggle("active");
        }
      });
  });
});
document
  .querySelector(
    ".mobile_t-nasze-best-sell-ery-tarrow_right_alt_24dp_5f-6368_fill-0_wght-400_grad-0_opsz"
  )
  .addEventListener("click", function (e) {
    e.preventDefault(); // Prevent the default anchor click behavior

    // Find the target element
    const target = document.getElementById("products");
    if (target) {
      // Smoothly scroll to the target
      target.scrollIntoView({ behavior: "smooth" });
    }
  });
