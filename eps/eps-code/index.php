<!DOCTYPE html>
<html>
<head>
    <title>Expense Management System</title>
    <style>
        
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}

h3 {
    color: #343a40;
}


  
  form {
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px #888888;
  }
  

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #343a40;
}

input[type="text"],
input[type="number"],
select {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #dc3545;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #c82333;
}

h5 {
    text-align: center;
    display: block;
    margin: 0 auto;
    width: 200px;
    height: 100px;
}

.navbar {
    background-color: #333;
    overflow: hidden;
}

.navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }
  
  .container {
    margin: auto;
    padding: 20px;
    max-width: 800px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin: 10px 0;
  }
  
  th,
  td {
    text-align: center;
    padding: 10px;
    border: 1px solid #ddd;
  }
  
  th {
    background-color: #4CAF50;
    color: #fff;
  }
  
  tr:hover {
    background-color: #f5f5f5;
  }
  
  .btn {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  .btn-edit {
    background-color: #4CAF50;
  }
  
  .btn-delete {
    background-color: #4CAF50;
  }

  
    </style>
</head>
<body>
    <h1>Expense Management System</h1>
    <div class="navbar">
        <a href="create.php">Add Expense</a>
        <a href="index.php">View Expense</a>
        <a href="#view-report">View Report</a>
        <a href="#set-limit">Set Limit</a>
    </div>
    <table>
        <tr>
            <th>Date</th>
            <th>Expense Amount</th>
            <th>Pay Mode</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        <?php
        require_once 'config/db.php';
        $query = "SELECT * FROM addexpenses";
        $result = $pdo->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)):
        ?>
        <tr>
            <td><?= $row['date'] ?></td>
            <td><?= $row['expense_amount'] ?></td>
            <td><?= $row['paymode'] ?></td>
            <td><?= $row['category'] ?></td>
            <td class="action-links">
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-delete">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
