function toggleDropdown(event) {
  event.stopPropagation();
  const button = event.currentTarget;
  const dropdown = button.nextElementSibling;
  const arrow = button.querySelector(".arrow-icon");
  const isOpen = dropdown.style.display === "block";

  document
    .querySelectorAll(".dropdown-content")
    .forEach((d) => (d.style.display = "none"));
  document
    .querySelectorAll(".dropdown-button")
    .forEach((b) => b.classList.remove("active"));
  document
    .querySelectorAll(".arrow-icon")
    .forEach((a) => (a.src = "../Foto/Dropdown.png"));

  if (!isOpen) {
    dropdown.style.display = "block";
    button.classList.add("active");
    arrow.src = "../Foto/Dropup.png";
  } else {
    dropdown.style.display = "none";
    button.classList.remove("active");
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

function selectSubject(name, event) {
  event.preventDefault();
  event.stopPropagation();
  const link = event.currentTarget;
  const dropdown = link.closest(".dropdown-content");
  const button = dropdown.previousElementSibling;
  const labels = button.querySelector("#dropdownLabels");
  const arrow = button.querySelector(".arrow-icon");

  labels.textContent = name;

  document.getElementById("subjectInput").value = name;

  dropdown.style.display = "none";
  button.classList.remove("active");
  arrow.src = "../Foto/Dropdown.png";
}

function selectCategory(name, event) {
  event.preventDefault();
  event.stopPropagation();
  const link = event.currentTarget;
  const dropdown = link.closest(".dropdown-content");
  const button = dropdown.previousElementSibling;
  const label = button.querySelector("#dropdownLabel");
  const arrow = button.querySelector(".arrow-icon");

  label.textContent = name;

  document.getElementById("categoryInput").value = name;

  dropdown.style.display = "none";
  button.classList.remove("active");
  arrow.src = "../Foto/Dropdown.png";
}

function validateForm() {
  const subject = document.getElementById("subjectInput").value.trim();
  const category = document.getElementById("categoryInput").value.trim();

  if (!subject || !category) {
    alert("Harap pilih pelajaran dan kategori sebelum mengirim!");
    return false;
  }

  return true;
}
