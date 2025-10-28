<?php
require_once '../actions/assignments/get-assignments.php';
require_once '../actions/assignments/lesson-name.php';

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../landing/index.php');
    exit;
}

$user = $_SESSION['user'];

$query = "SELECT * from assignments WHERE subject_id=";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Homepage.css">
    <link rel="stylesheet" type="text/css" href="Deskripsi.css">
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

    <p class="label">Pelajaran</p>

    <div class="dropdown">
        <button class="dropdown-button" onclick="toggleDropdown(event)"><?= $label ?></button>
        <div id="dropdownMenu" class="dropdown-content">
            <a href="index2.php">Semua</a>
            <a href="index2.php?subject_id=1">TLJ</a>
            <a href="index2.php?subject_id=2">PPL</a>
            <a href="index2.php?subject_id=3">ING</a>
            <a href="index2.php?subject_id=4">PP</a>
            <a href="index2.php?subject_id=5">DAMI</a>
            <a href="index2.php?subject_id=6">PDL</a>
            <a href="index2.php?subject_id=7">Agama</a>
            <a href="index2.php?subject_id=8">BI</a>
            <a href="index2.php?subject_id=9">PWL</a>
            <a href="index2.php?subject_id=10">PJOK</a>
            <a href="index2.php?subject_id=11">PKdK</a>
            <a href="index2.php?subject_id=12">Sejarah</a>
            <a href="index2.php?subject_id=13">MAN</a>
            <a href="index2.php?subject_id=14">MTK</a>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelajaran</th>
                    <th>Keterangan</th>
                    <th>Tenggat Waktu</th>
                    <th>Kategori</th>
                    <th>Pengaturan</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($assignments as $index => $assignment): ?>
                    <tr>
                        <td>
                            <?= $index + 1 ?>
                        </td>
                        <td>
                            <?= $subjects[$assignment['subject_id']] ?>
                        </td>
                        <td>
                            <?= $assignment['description'] ?>
                        </td>
                        <td>
                            <?= $assignment['due_date'] ?>
                        </td>
                        <td>
                            <?= $categories[$assignment['category_id']] ?>
                        </td>
                        <td>
                            <div class="btnnn">
                                <a href="#" class="btn btn-edit">Edit</a>

                                <form method="post" action="../actions/assignments/destroy.php?id=<?= $assignment['id'] ?>">
                                    <button name="destroy" onclick="return confirm('Are you sure to delete this user?')"
                                        type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="#" class="btnn btn-edit">Add</a>

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