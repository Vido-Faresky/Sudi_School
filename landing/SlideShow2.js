//Slide Show
window.onload = function () {
  const slideS = document.querySelector(".SlideS");
  const slides = document.querySelectorAll(".Slide");

  const links = ["../Login/Login.php"];

  slides.forEach((slide, index) => {
    slide.style.cursor = "pointer";
    slide.addEventListener("click", () => {
      window.location.href = links[index];
    });
  });

  const wrapper = document.createElement("div");
  wrapper.classList.add("SlideS-inner");

  slides.forEach((slide) => wrapper.appendChild(slide));
  slideS.appendChild(wrapper);

  let index = -1;

  function slideShow() {
    const totalSlides = slides.length;
    index = (index + 1) % totalSlides;
    const offset = -index * 100;
    wrapper.style.transform = `translateX(${offset}%)`;

    setTimeout(slideShow, 2000);
  }

  slideShow();
};
3;

//Dropdown

function toggleDropdown(event) {
  const button = event.currentTarget;
  const dropdown = button.nextElementSibling;
  const arrow = button.querySelector(".arrow-icon");
  const isOpen = dropdown.style.display === "block";

  document.querySelectorAll(".dropdown-content").forEach(d => d.style.display = "none");
  document.querySelectorAll(".dropdown-button").forEach(b => b.classList.remove("active"));
  document.querySelectorAll(".arrow-icon").forEach(a => a.src = "../Foto/Dropdown.png");

  if (!isOpen) {
    dropdown.style.display = "block";
    button.classList.add("active");
    arrow.src = "../Foto/Dropup.png";
  } else {
    arrow.src = "../Foto/Dropdown.png";
  }

  document.addEventListener("click", function closeDropdown(e) {
    if (!button.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.style.display = "none";
      button.classList.remove("active");
      arrow.src = "../Foto/Dropdown.png";
      document.removeEventListener("click", closeDropdown);
    }
  });
}