<?php
    $foods = array("apple","orange","banana","coconut");
    
    // $foods[0] = "pineapple";
    //การเพิ่ม ข้อมูลเข้าไปใน array
    // array_push($foods, "pineapple");
    //การเอาข้อมูลออกตัวล่าสุด
    // array_pop($foods);
    //การขยับข้อมูลในการ query ไปทางขวา
    // array_shift($foods);
    //การสลับตำแหน่งข้อมูลทั้งหมด reverse
    // $array_reverse =  array_reverse($foods);
    echo count($foods). "<br>";

    foreach($foods as $food) {
        echo $food . "<br>";
    }

    // echo $food[0]. "<br>";
    // echo $food[1]. "<br>";
    // echo $food[2]. "<br>";
    // echo $food[3]. "<br>";
?>  