<?php
    //สามารถกำหนดค่า cookie ได้จากข้อมูลที่ได้มีการป้อนไว้
    setcookie("fav_food", "pizza", time() + 86400 * 2, "/");
    setcookie("fav_drink", "coffee", time() + 86400 * 2, "/");
    setcookie("fav_dessert", "ice cream", time() + 86400 * 2, "/");

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
    }else{
        echo"I don't know you favorite food";
    }
    
?>
//เป็นการบันทึกค่าทั้งหมดที่มีการเรียกใช้งาน