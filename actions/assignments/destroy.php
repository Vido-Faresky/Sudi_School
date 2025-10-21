<?php
require_once '../../config/db-connection.php';
if (isset($_POST['destroy'])) {
    $query = "DELETE FROM assignments WHERE id = ?";

    $assignmentid = $_GET['id'];

    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $assignmentid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: ../../landing/index2.php');
        exit;
    } else {
        echo 'Error to delete user: ' . $stmt->error;
    }
}
?>