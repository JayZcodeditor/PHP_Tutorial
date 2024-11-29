<?php

    $username = "Bro Code";
    $username = array("Bro", "The", "Code"); 
    $phone = "123-456-7890";

    //เปลี่ยนเป็นตัวเลข หรือ ตัวใหญ่
    // $username = strtolower($username);
    // $username = strtoupper($username);
    //เอาพื้นที่ว่างออกทั้งหมด
    // $username = trim($username);
    //เพิ่มเลข 0 20 ตัว
    // $username = str_pad($username, 20 ,"0");
    //แทนที่เครื่องหมาย - ให้เป็น / 
    // $phone = str_replace("-", "/", $phone);
    //ทำให้ตัวหนังสือ reverse
    // $username = strrev($username);
    //สลับตัวหนงสือทั้งหมด
    // $username = str_shuffle($username);
    //เช็คค่าว่าต่างกันมั้ย 0 => เหมือน || 1 => ต่าง 
    // $equls = strcmp($username, "Bro Code");
    //จำนวนตัวอักษรทังหมด
    // $count = strlen($phone);
    //เป็นการหา index ของ " " หรือพื้นที่ว่าง
    // $index = strpos($username," ");
    //กำหนดค่าเริ่มของค่าใหม่
    // $index = substr($username, 3, 3);
    // $index = substr($username, 4);
    //แยกตัวอักษรโดย exploding ให้เป็น Array
    // $fullname = explode(" ",$username);
    // foreach($fullname as $name) {
    //     echo $name;
    // }
    // รวมตัวอักษรที่อยู่ใน  Array
    $username = implode(" ", $username);

    echo $username;

?>