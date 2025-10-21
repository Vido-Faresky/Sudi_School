<?php
require_once '../../config/db-connection.php';

function getAssignments($payload)
{
    global $connection;

    $products = [];

    // $keyword = isset($payload['keyword']) ? $payload['keyword'] : "";
    // $search = "%keyword%";

    $query = "SELECT name, description, due_date, category FROM assignment";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('sii', $search, $limit, $offset);
    $stmt->execute();

    $result = $stmt->get_result();

    while ($product = $result->fetch_assoc()) {
        $products[] = $product;
    }

    return $products;
}
?>