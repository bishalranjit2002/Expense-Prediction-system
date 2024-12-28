<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM addexpenses WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    header('Location: index.php');
    exit();
}
?>
