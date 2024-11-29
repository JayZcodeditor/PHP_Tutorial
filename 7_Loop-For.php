<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php
    
    $couter = $_POST["counter"];

    for($i = $couter;$i > 0 ;$i++) {
        echo $i. "<br>";
    }
    
?>  