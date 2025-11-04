<?php
require_once '../config/db-connection.php';
require_once 'lesson-name.php';

$assignments = [];
$subjects = [];
$categories = [];

$querySubjects = "SELECT * FROM subjects";
$resultSubjects = $connection->query($querySubjects);


if ($resultSubjects && $resultSubjects->num_rows > 0) {
    while ($row = $resultSubjects->fetch_assoc()) {
        $subjects[$row['id']] = $row['name'];
    }
}

$queryCategories = "SELECT * FROM category";
$resultCategories = $connection->query($queryCategories);

if ($resultCategories && $resultCategories->num_rows > 0) {
    while ($roww = $resultCategories->fetch_assoc()) {
        $categories[$roww['id']] = $roww['name'];
    }
}


$label = "Semua";
$labels = "Pilih Pelajaran";
$labelss = "Pilih Kategori";

if (isset($_GET['subject_id']) && !empty($_GET['subject_id'])) {
    $subjectid = $_GET['subject_id'];
    $query = "SELECT * FROM assignments INNER JOIN subjects on subjects.id = assignments.subject_id WHERE subjects.id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $subjectid);
    $label = $subjects[$subjectid] ?? "Semua";

} else {
    $query = "SELECT * FROM assignments";
    $stmt = $connection->prepare($query);
}

$stmt->execute();
$result = $stmt->get_result();

while ($assignment = $result->fetch_assoc()) {
    $assignments[] = $assignment;
}





?>