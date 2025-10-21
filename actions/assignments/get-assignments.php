<?php
require_once '../config/db-connection.php';
require_once 'lesson-name.php';

$query = "SELECT * from assignments WHERE subject_id = ?";

$assignments = [];

$subjectid = $_GET['subject_id'];

$stmt = $connection->prepare($query);
$stmt->bind_param('i', $subjectid);
$stmt->execute();

$result = $stmt->get_result();

while ($assignment = $result->fetch_assoc()) {
    $assignments[] = $assignment;
}

?>