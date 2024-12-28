<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $expensename = $_POST['expensename'];
    $amount = $_POST['amount'];
    $paymode = $_POST['paymode'];
    $category = $_POST['category'];

    $query = "INSERT INTO addexpenses (date, expense_name, expense_amount, paymode, category) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$date, $expensename, $amount, $paymode, $category]);

    header('Location: index.php');
    exit();
}
?>
