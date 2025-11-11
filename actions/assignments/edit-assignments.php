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

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $connection->prepare("SELECT * FROM assignments WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "Tugas tidak ditemukan.";
        exit;
    }

    $assignment = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $category = $_POST['category'];
    $subject = $_POST['subject'];

    $stmt = $connection->prepare("UPDATE assignments SET description = ?, due_date = ?, category_id = ?, subject_id = ? WHERE id = ?");
    $stmt->bind_param('ssiii', $description, $due_date, $category, $subject, $id);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: ../../landing/index2.php');
        exit;
    } else {
        echo "Gagal memperbarui tugas: " . $stmt->error;
    }
}
?>