<?php
require_once '../components/koneksi.php';

$users = [];

$query = "SELECT * from users";

$stmt = $connection->prepare($query);
$stmt->execute();

$result = $stmt->get_result();

while ($user = $result->fetch_assoc()) {
    $users[] = $user;
}

?>