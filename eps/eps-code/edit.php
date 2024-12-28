<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['date'], $_POST['expensename'], $_POST['amount'], $_POST['paymode'], $_POST['category'])) {
    $id = $_GET['id'];
    $date = $_POST['date'];
    $expensename = $_POST['expensename'];
    $amount = $_POST['amount'];
    $paymode = $_POST['paymode'];
    $category = $_POST['category'];

    $query = "UPDATE addexpenses SET date = ?, expense_name = ?, expense_amount = ?, paymode = ?, category = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$date, $expensename, $amount, $paymode, $category, $id]);

    header('Location: index.php');
    exit();
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM addexpenses WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        header('Location: index.php');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit expenses</h2>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="date">Date</label>
        <input type="datetime-local" name="date" id="date" value="<?php echo $user['date']; ?>">
        <br><br>
        <label for="expensename">Expense Name</label>
        <input type="text" name="expensename" id="expensename" value="<?php echo $user['expense_name']; ?>">
        <br><br>
        <label for="amount">Expense Amount</label>
        <input type="number" min="0" name="amount" id="amount" value="<?php echo $user['expense_amount']; ?>">
        <br><br>
        <label for="paymode">Pay-Mode</label>
        <select name="paymode" id="paymode">
            <option value="cash" <?php if ($user['paymode'] === 'cash') echo 'selected'; ?>>Cash</option>
            <option value="debitcard" <?php if ($user['paymode'] === 'debitcard') echo 'selected'; ?>>Debit Card</option>
            <option value="creditcard" <?php if ($user['paymode'] === 'creditcard') echo 'selected'; ?>>Credit Card</option>
            <option value="epayment" <?php if ($user['paymode'] === 'epayment') echo 'selected'; ?>>E-Payment</option>
            <option value="onlinebanking" <?php if ($user['paymode'] === 'onlinebanking') echo 'selected'; ?>>Online Banking</option>
        </select>
        <br><br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <option value="food" <?php if ($user['category'] === 'food') echo 'selected'; ?>>Food</option>
            <option value="entertainment" <?php if ($user['category'] === 'entertainment') echo 'selected'; ?>>Entertainment</option>
            <option value="business" <?php if ($user['category'] === 'business') echo 'selected'; ?>>Business</option>
            <option value="rent" <?php if ($user['category'] === 'rent') echo 'selected'; ?>>Rent</option>
            <option value="emi" <?php if ($user['category'] === 'emi') echo 'selected'; ?>>EMI</option>
            <option value="other" <?php if ($user['category'] === 'other') echo 'selected'; ?>>Other</option>
        </select>
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
