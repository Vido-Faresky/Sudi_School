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
    const password = document.getElementById("passwordd");
    const mataaa = document.getElementById("mataaa");
    if (password.type === "password") {
    password.type = "text";
    mataaa.src = "../Foto/PWBuka.png";
    } else {
    password.type = "password";
    mataaa.src = "../Foto/PWTutup.png";
    }
}