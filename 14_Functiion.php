<?php

hello("jay");
$answer =  calculate(-10);
// switch($answer) {
//     case ($answer > 20) : echo"Oh nice";
//     break;
//     case ($answer < 20) : echo "so bad";
//     break;
//     default : echo "ok";
// }

function hello($name) {
    echo("Hello {$name} <br>");
}

function calculate($name) {
    $total = 20 + $name;
    // echo $total;
    return $total;
}//การใส่ return จะนำค่าออกมาเพื่อที่จะสามารถนำไปใช้กับ switch ได้


// php ไม่สามารถกำหนด ค่า parameter ได้ ดังนั้นจึงจำเป็นต้องเขียนโค้ด check เอง
function Hi(string $name) {
    if (!is_numeric($name)) {
        echo "Hello {$name} <br>";
    } else {
        echo "Error: Invalid input!";
    }
}

// Usage
Hi("John");  // ส่งค่าข้อมูลที่ถูกต้อง
Hi(123);     // ส่งค่าที่ไม่ถูกต้อง ทำให้เกิดข้อผิดพลาด


?>