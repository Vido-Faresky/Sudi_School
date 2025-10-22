<?php
require_once '../actions/assignments/get-assignments.php';
require_once '../actions/assignments/lesson-name.php';

$query = "SELECT * from assignments WHERE subject_id=";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Deskripsi.css">
    <title>SJRH</title>
    <link rel="icon" href="../Foto/Logo Sudi School.png" type="png">
</head>

<body>
    <div class="Header">
        <header>
            <a href="../index.php"><img style="width: 130px; margin-left: 130px;" src="../Foto/Logo Sudi School.png"
                    alt="Logo Sudi School"></a>
            <Input class="Header-Input" type="text" placeholder="Temukan Pelajaran, Tugas, Ulangan..."></Input>
            <button class="Header-Search">
                <img style="width: 40px; margin-top: 2px;" src="../Foto/Search.png" alt="Search">
            </button>
        </header>
    </div>

    <div class="Desk">
        <div class="Foto">
            <img src="../Foto/SJRH.png">
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
                                <a href="#" class="btn btn-edit">Edit</a>

                                <form method="post" action="../actions/assignments/destroy.php?id=<?= $assignment['id'] ?>">
                                    <button name="destroy" onclick="return confirm('Are you sure to delete this user?')"
                                        type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <a href="#" class="btnn btn-edit">Add</a>

        <p style="font-size: 20px;">Pilihan Lainnya</p>

        <div class="Lainnya">
            <a style="text-decoration: none; color: black;" href="TLJ.php?subject_id=1">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/TLJ.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PPL.php?subject_id=2">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PPL.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="ING.php?subject_id=3">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/ING.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PP.php?subject_id=4">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PP.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="DAMI.php?subject_id=5">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/DAMI.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PDL.php?subject_id=6">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PDL.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="AGM.php?subject_id=7">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/AGM.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="BI.php?subject_id=8">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/BI.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="MTK.php?subject_id=14">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/MTK.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PWL.php?subject_id=9">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PWL.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PJOK.php?subject_id=10">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PJOK.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="PKdK.php?subject_id=11">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/PKDK.png">
                </div>
            </a>
            <a style="text-decoration: none; color: black;" href="MAN.php?subject_id=13">
                <div class="LainB" style="height: 270px;">
                    <img class="Fott" src="../Foto/MAN.png">
                </div>
            </a>
        </div>
    </div>

    <footer class="Footer">
        <h2>Kelompok 1 Terkeren :</h2>
        <ul>Charles</ul>
        <ul>Michael Robert Yandi</ul>
        <ul>Ryo Marvel</ul>
        <ul>Vido Faresky</ul>
    </footer>
</body>

</html>