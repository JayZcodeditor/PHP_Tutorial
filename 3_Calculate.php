<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <label for="">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>     -->
    
    <!-- Test pi ฟังก์ชั่น -->
    <form action="index.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>
    
</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;
    // เป็น ค่าที่ไม่ติดลบ
    // $total = abs($x);
    //เป็นค่าที่ปัดขึ้นถ้ามากกว่า 5
    // $total = round($x);
    //เป็นค่าที่ไม่ปัดขึ้นเลย
    // $total = floor($x);
    //เป็นค่าที่ปัดขึ้นหมด ถึงน้อยกว่า 0.5
    // $total = ceil($x);
    //เป็นการยกกำลัง
    // $total = pow($x, $y);
    //เป็นการหารากที่ 2
    // $total = sqrt($x);
    //เป้นการหาค่าที่มากที่สุดแลน้อยที่สุด
    // $total = max($z, $x, $y);
    // $total = min($z, $x, $y);
    // เป็นการหาค่า pi
    // $total = pi();
    //เป็นการสุ่มค่า
    // $total = rand(10, 20);
    // echo $total;

    $radius = $_POST["radius"];
    $circmference = null;

    $circmference = 2 * pi() * $radius;
    $circmference = round($circmference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    
    echo"Circumference = {$circmference} cm <br>";
    echo"Area = {$area} cm^2 <br>";


    

?>
