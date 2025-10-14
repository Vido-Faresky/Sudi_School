<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Login</title>
    <link rel="icon" href="../Foto/Logo Sudi School.png" type="png">
    <link rel="stylesheet" href="Log.css" />
</head>
<body>

  <div class="header">
    <span>Login</span>
    <a href="../index.php">
    <span class="close" style="text-decoration: none;">X</span>
    </a>
  </div>

  <div class="Login">
    <form method="POST" action="../actions/users/login.php">
      <label>Email</label>
      <input type="email" name="username" placeholder="Masukkan Email" required />

    <div class="pwc">
      <label>Password</label>
      <input id="password" type="password" name="password" placeholder="Masukkan Password" required />
      <span class="matapw" onclick="munculpw()"><img id="mataa" class="Mata" src="../Foto/PWTutup.png"></span>
    </div>

      <div class="Ingat">
        <label><input type="checkbox" /> Ingatkan Saya</label>
        <a href="#">Lupa Password</a>
      </div>

        <button type="submit" class="Masuk" name="login" >Login</button>
    </form>

    <a href="https://www.facebook.com/?locale2=id_ID&_rdr">
      <button class="Medsos facebook">
        Lanjutkan Dengan Akun Facebook
      </button>
    </a>

    <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=en&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S236010297%3A1747183762660966">
      <button class="Medsos google">
        Lanjutkan Dengan Akun Google
      </button>
    </a>

    <button class="Medsos apple">
      Lanjutkan Dengan Akun Apple
    </button>
</div>

<div class="daftars">
<p>Belum punya akun?</p>
<a href="Daftar.php"><p style="color: red; text-decoration: none;">Daftar Sekarang</p></a>
</div>

<script src="Password.js"></script>

</body>