// Select necessary elements
const frame22 = document.querySelector(".frame-22");
const readMoreBtn = document.getElementById("read-more");
const closeBtn = document.getElementById("close-btn");
const hideDescriptionBtn = document.querySelector(".ukryj-dodatkowy-opis");

// Function to open the frame-22 container
function openFrame() {
  frame22.classList.add("active");
}

// Function to close the frame-22 container
function closeFrame() {
  frame22.classList.remove("active");
  closeBtn.classList.add("hide");
  setTimeout(() => {
    closeBtn.classList.remove("hide");
  }, 300); // Matches CSS transition duration
}

// Event listeners
readMoreBtn.addEventListener("click", openFrame);
closeBtn.addEventListener("click", closeFrame);
hideDescriptionBtn.addEventListener("click", closeFrame);

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
