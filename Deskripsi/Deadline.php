<?php
require_once '../actions/assignments/deadline.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Deskripsi.css">
    <title>Agama</title>
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
        <div class="Fotoo">
            <img src="../Foto/SlideShow.png">
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
                                <?= date('Y-m-d', strtotime($assignment['due_date'])) ?>
                            </td>
                            <td>
                                <?= $categories[$assignment['category_id']] ?>
                            </td>
                            <td>
                                <div class="btnnn">
                                    <a href="#" class="btn btn-edit">Edit</a>

                                    <form method="post"
                                        action="../actions/assignments/destroy.php?id=<?= $assignment['id'] ?>">
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
</body>

</html>