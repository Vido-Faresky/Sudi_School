<?php
require_once __DIR__ . '/../../config/db-connection.php';

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

if (isset($_POST['add'])) {
    $lesson = $_POST['subject'];
    $desc = $_POST['description'];
    $deadline = $_POST['due_date'];
    $category = $_POST['category'];

    $query = "INSERT INTO assignments (description, due_date, category_id, subject_id) VALUES (?, ?, ?, ?)";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('ssii', $desc, $deadline, $category, $lesson);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();
        header('Location: ../../landing/index2.php');
        exit();

    }
}
?>