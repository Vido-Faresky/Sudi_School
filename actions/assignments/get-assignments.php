<?php
require_once '../config/db-connection.php';
require_once 'lesson-name.php';

$assignments = [];


$label = "Semua";

isset($_GET['name']);
$lesson = $_GET['name'];
$subjects = "SELECT * FROM assignments INNER JOIN subjects on subjects.id = assignments.subject_id WHERE name = ?";
$stmtt = $connection->prepare($subjects);
$stmtt->bind_param('i', $lesson);

if (isset($_GET['subject_id']) && !empty($_GET['subject_id'])) {
    $subjectid = $_GET['subject_id'];
    $query = "SELECT * FROM assignments WHERE subject_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $subjectid);

    
    if ($subjectid == 1) {
        $label = "TLJ";
    } elseif ($subjectid == 2) {
        $label = "PPL";
    } elseif ($subjectid == 3) {
        $label = "ING";
    } elseif ($subjectid == 4) {
        $label = "PP";
    } elseif ($subjectid == 5) {
        $label = "DAMI";
    } elseif ($subjectid == 6) {
        $label = "PDL";
    } elseif ($subjectid == 7) {
        $label = "AGAMA";
    } elseif ($subjectid == 8) {
        $label = "BI";
    } elseif ($subjectid == 9) {
        $label = "PWL";
    } elseif ($subjectid == 10) {
        $label = "PJOK";
    } elseif ($subjectid == 11) {
        $label = "PKdK";
    } elseif ($subjectid == 12) {
        $label = "SJRH";
    } elseif ($subjectid == 13) {
        $label = "MAN";
    } elseif ($subjectid == 14) {
        $label = "MTK";
    }

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