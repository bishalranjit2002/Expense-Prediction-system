<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Expense Management System</h1>
	<div class="navbar">
		<a href="create.php">Add Expense</a>
		<a href="index.php">View Expense</a>
		<a href="#view-report">View Report</a>
		<a href="#set-limit">Set Limit</a>
	</div>
    <h3>Add expenses</h3>
    <form action="store.php" method="POST" onsubmit="submitForm(event)">
			<label for="date">Date</label>
			<input type="datetime-local" name="date" id="date" required>
			<br><br>
			<label for="expensename">Expense name</label>
			<input type="text" name="expensename" id="expensename" required>
			<br><br>
			<label for="amount">Expense Amount</label>
			<input type="number" min="0" name="amount" id="amount" required>
			<br><br>
			<label for="paymode">Pay-Mode</label>
			<select name="paymode" id="paymode" required>
				<option selected disabled hidden>Pay-Mode</option>
				<option value="cash">cash</option>
				<option value="debitcard">debit card</option>
				<option value="creditcard">credit card</option>
				<option value="epayment">e-payment</option>
				<option value="onlinebanking">online banking</option>
			</select>
			<br><br>
			<label for="category">Category</label>
			<select name="category" id="category" required>
				<option selected disabled hidden>Category</option>
				<option value="food">food</option>
				<option value="entertainment">Entertainment</option>
				<option value="business">Business</option>
				<option value="rent">Rent</option>
				<option value="EMI">EMI</option>
				<option value="other">other</option>
			</select>
			<br><br>
			<input type="submit" value="Add">
		</form>
</body>
</html>
