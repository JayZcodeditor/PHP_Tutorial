<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo"You Have ordered: {$quantity} x {$item}/s <br>";
    echo"You Total is: \${$quantity} x {$item}/s";
?>
