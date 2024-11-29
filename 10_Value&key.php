<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" >
    </form>
</body>
</html>
<?php

    $capitals = array("USA" => "Washington D.C.",
                    "Japan"=> "Tokyo",
                    "South Korea"=> "Seoul",
                    "India"=> "New Delhi",) ;

    $capitals = $capitals[$_POST["country"]];

    echo $capitals;

    // echo $capitals['India'] ;

    // foreach($capitals as $key => $value) {
    //     echo $capitals[$key] = $value . "<br>";
    // }
    // $capitals["USA"] = "Las vegas";
    // $capitals["China"] = "Beijing";
    //เอาข้อมูลตัวสุดท้ายออก
    // array_pop($capitals);
    //เอาข้อมูลด้านหน้าออก
    // array_shift( $capitals );

    // บอกตำแหน่งและเอาเฉพาะ key
    // $keys = array_keys($capitals);
    // // บอกตำแหน่งและเอาเฉพาะ value
    // $value = array_values($capitals);
    // // สลับตำแหน่งของ key และ value
    // // $capitals = array_flip($capitals);
    
    // $capitals = array_reverse($capitals);


    // foreach($capitals as $key => $value) {
    //     echo"{$key} = {$value} <br>"; 
    // }

    
?>  