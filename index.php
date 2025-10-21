<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ./landing/index.php');
} else {
    header('Location: ./landing/index2.php');
}
?>