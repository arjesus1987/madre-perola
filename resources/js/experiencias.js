function mostrarAlerta() {
    alert("Você clicou no botão!");
  }
  
  // Config Slide.
  
  const track = document.getElementById("carousel-track");
  const slides = document.querySelectorAll(".slide");
  const prev = document.getElementById("prev");
  const next = document.getElementById("next");
  
  let currentIndex = 0;
  const totalSlides = slides.length;
  
  function updateCarousel() {
    const slideWidth = 1280; // largura fixa do container
    const offset = -(slideWidth * currentIndex);
    track.style.transform = `translateX(${offset}px)`;
  }
  
  prev.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });
  
  next.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  });
  
  window.addEventListener("resize", updateCarousel);
  window.addEventListener("load", updateCarousel);
  