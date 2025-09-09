window.onload = function() {
const slideS = document.querySelector('.SlideS');
const slides = document.querySelectorAll('.Slide');

const links = [
  "../Deskripsi Produk/Deadline.php",
];

slides.forEach((slide, index) => {
    slide.style.cursor = "pointer";
    slide.addEventListener('click', () => {
      window.location.href = links[index];
    });
});

const wrapper = document.createElement('div');
wrapper.classList.add('SlideS-inner');

slides.forEach(slide => wrapper.appendChild(slide));
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
