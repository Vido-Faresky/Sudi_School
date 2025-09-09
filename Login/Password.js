function munculpw() {
    const password = document.getElementById("password");
    const mataaa = document.getElementById("mataa");
    if (password.type === "password") {
    password.type = "text";
    mataaa.src = "../Foto/PWBuka.png";
    } else {
    password.type = "password";
    mataaa.src = "../Foto/PWTutup.png";
    }
}

function munculpww() {
    const password = document.getElementById("konfir");
    const mataaa = document.getElementById("mataaa");
    if (password.type === "password") {
    password.type = "text";
    mataaa.src = "../Foto/PWBuka.png";
    } else {
    password.type = "password";
    mataaa.src = "../Foto/PWTutup.png";
    }
}

  const form = document.getElementById("Daff");
  const password = document.getElementById("password");
  const konfir = document.getElementById("konfir");
  const error = document.getElementById("error");

  form.addEventListener("submit", function(event) {
    if (password.value !== konfir.value) {
      event.preventDefault();
      error.style.display = "block";
    } else {
      error.style.display = "none";
      alert("Pendaftaran berhasil!");
    }
  });