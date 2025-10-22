<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../landing/index.php');
    exit;
}

$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Homepage.css">
    <title>Homepage Utama</title>
    <link rel="icon" href="../Foto/Logo Sudi School.png" type="png">
</head>

<body>
    <div class="Header">
        <header>
            <a href="index.php"><img style="width: 130px; margin-left: 130px;" src="../Foto/Logo Sudi School.png"
                    alt="Logo Sudi School"></a>
            <Input class="Header-Input" type="text" placeholder="Temukan Pelajaran, Tugas, Ulangan..."></Input>
            <button class="Header-Search">
                <img style="width: 40px; margin-top: 2px;" src="../Foto/Search.png" alt="Search">
            </button>
            <div class="Masukk">
                <a class="Masuk" style="margin-left: 1600px;"
                    onclick="return confirm('Are you sure to logout from this app?')"
                    href="../actions/users/logout.php">Logout</a>
            </div>
        </header>
    </div>

    <div class="SlideS">
        <img class="Slide" src="../Foto/SlideShow.png">
    </div>

    <div class="Mobil">
        <h1 class="Mobill">Pelajaran</h1>
    </div>

    <div class="MoB1">
        <a href="../Deskripsi/TLJ.php?subject_id=1">
            <div class="MOB">
                <img class="FMOB" src="../Foto/TLJ.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PPL.php?subject_id=2">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PPL.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/ING.php?subject_id=3">
            <div class="MOB">
                <img class="FMOB" src="../Foto/ING.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PP.php?subject_id=4">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PP.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
    </div>

    <div class="MoB1">
        <a href="../Deskripsi/DAMI.php?subject_id=5">
            <div class="MOB">
                <img class="FMOB" src="../Foto/DAMI.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PDL.php?subject_id=6">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PDL.png">
                <div class="PMOB">
                </div>
            </div>
            <a href="../Deskripsi/AGM.php?subject_id=7">
                <div class="MOB">
                    <img class="FMOB" src="../Foto/AGM.png">
                    <div class="PMOB">
                    </div>
                </div>
            </a>
            <a href="../Deskripsi/BI.php?subject_id=8">
                <div class="MOB">
                    <img class="FMOB" src="../Foto/BI.png">
                    <div class="PMOB">
                    </div>
                </div>
            </a>
    </div>

    <div class="MoB1">
        <a href="../Deskripsi/MTK.php?subject_id=14">
            <div class="MOB">
                <img class="FMOB" src="../Foto/MTK.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PWL.php?subject_id=9">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PWL.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PJOK.php?subject_id=10">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PJOK.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/PKdK.php?subject_id=11">
            <div class="MOB">
                <img class="FMOB" src="../Foto/PKdK.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
    </div>

    <div class="MoB1">
        <a href="../Deskripsi/SJRH.php?subject_id=12">
            <div class="MOB">
                <img class="FMOB" src="../Foto/SJRH.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
        <a href="../Deskripsi/MAN.php?subject_id=13">
            <div class="MOB">
                <img class="FMOB" src="../Foto/MAN.png">
                <div class="PMOB">
                </div>
            </div>
        </a>
    </div>

    <footer class="Footer">
        <h2>Kelompok 1 Terkeren :</h2>
        <ul>Charles</ul>
        <ul>Michael Robert Yandi</ul>
        <ul>Ryo Marvel</ul>
        <ul>Vido Faresky</ul>
    </footer>

    <script src="SlideShow.js"></script>
</body>

</html>