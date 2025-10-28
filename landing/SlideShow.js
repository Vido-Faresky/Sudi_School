window.onload = function () {
  const slideS = document.querySelector(".SlideS");
  const slides = document.querySelectorAll(".Slide");

  const links = ["../Deskripsi/Deadline.php"];

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

function toggleDropdown(event) {
  event.stopPropagation();
  document.getElementById("dropdownMenu").classList.toggle("show");
}

window.addEventListener("beforeunload", function () {
  localStorage.setItem("scrollPosition", window.scrollY);
});

window.addEventListener("load", function () {
  const scrollPosition = localStorage.getItem("scrollPosition");
  if (scrollPosition) {
    window.scrollTo(0, parseInt(scrollPosition));
  }
});
