<?php
require_once '../config/db-connection.php';
require_once 'lesson-name.php';

date_default_timezone_set('Asia/Pontianak');
$today = date('Y-m-d');
$nextWeek = date('Y-m-d', strtotime('+7 days'));

$query = "SELECT * FROM assignments WHERE due_date is NOT NULL and due_date between ? and ?";
$stmt = $connection->prepare($query);
$stmt->bind_param('ss', $today, $nextWeek);
$stmt->execute();
$result = $stmt->get_result();

$assignments = $result->fetch_all(MYSQLI_ASSOC);

?>