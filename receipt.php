<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Receipt</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1><b>RECEIPT</b></h1>
    <table>
        <tr>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td><b>Total Price</b></td>
            <td><?php echo $_SESSION['totalPrice']; ?></td>
        </tr>
        <tr>
            <td><b>You Paid</b></td>
            <td><?php echo $_SESSION['cash']; ?></td>
        </tr>
        <tr>
            <td><b>CHANGE</b></td>
            <td><?php echo $_SESSION['change']; ?></td>
        </tr>
        <tr>
            <td colspan="2"><b><?php echo $_SESSION['timestamp']; ?></b></td>
        </tr>
    </table>
    
    <form action="index.php" method="get">
        <input type="submit" value="Next Order">
    </form>
</body>
</html>
