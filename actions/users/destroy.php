<?php
require_once '../../config/db-connection.php';
if (isset($_POST['destroy'])) {
    $query = "DELETE FROM users WHERE id = ?";

    $userid = $_GET['id'];

    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $userid);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: ../../landing/index.php');
        exit;
    } else {
        echo 'Error to delete user: ' . $stmt->error;
    }
}
?>