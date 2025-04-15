let slideIndex = 0;
const slides = document.getElementsByClassName("slide");
const dots = document.getElementsByClassName("dot");

function showSlides() {
  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Remove the 'active' class from all dots
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  // Update slideIndex
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }

  // Show the current slide and activate the corresponding dot
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].classList.add("active");

  // Change slide every 3 seconds
  setTimeout(showSlides, 3000);
}

// When a dot is clicked, go to the corresponding slide
for (let i = 0; i < dots.length; i++) {
  dots[i].addEventListener("click", function() {
    slideIndex = i;
    showSlides();
  });
}

// Start the slideshow when the page loads
window.onload = showSlides;
