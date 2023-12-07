document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");

  let index = 0;

  function updateSlider() {
    slider.style.transform = `translateX(${-index * 100}%)`;
  }

  function nextSlide() {
    index = (index + 1) % slides.length;
    updateSlider();
  }

  function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
  }

  setInterval(nextSlide, 5000); // Change slide every 5 seconds
});

function openOverlay(img) {
  document.getElementById("overlayImage").src = img.src;
  document.getElementById("overlayText").innerHTML = img.alt;
  document.getElementById("imageOverlay").style.display = "flex";
}

function closeOverlay() {
  document.getElementById("imageOverlay").style.display = "none";
}
