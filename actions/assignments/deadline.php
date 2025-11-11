<?php
require_once '../config/db-connection.php';
require_once 'lesson-name.php';

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

date_default_timezone_set('Asia/Pontianak');
$today = date('Y-m-d');
$nextWeek = date('Y-m-d', strtotime('+7 days'));

$query = "SELECT * FROM assignments WHERE due_date is NOT NULL and due_date between ? and ?";
$stmt = $connection->prepare($query);
$stmt->bind_param('ss', $today, $nextWeek);
$stmt->execute();
$result = $stmt->get_result();

$assignments = $result->fetch_all(MYSQLI_ASSOC);

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

?>