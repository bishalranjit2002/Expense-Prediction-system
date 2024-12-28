<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $date = $_POST['date'];
    $expensename = $_POST['expensename'];
    $amount = $_POST['amount'];
    $paymode = $_POST['paymode'];
    $category = $_POST['category'];


    $query = "UPDATE addexpenses SET date = ?, expensename = ?, amount = ?, paymode = ?, category = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$date, $expensename, $amount, $paymode, $category]);
    header('Location: index.php');
    exit();
}
?>
