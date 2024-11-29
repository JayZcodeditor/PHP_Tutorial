<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username:</label>
        <input type="text" name="username"><br>
        <label for="">password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php

    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     if(empty($username)){
    //         echo "Username is missing";
    //     }elseif(empty($password)){
    //         echo "Password is missing";
    //     }else{
    //         echo"Hello {$username}";
    // }}

    // isset(); ใช้ในการตรวจสอบถ้าเป็นค่า null จะไม่แสดงอะไร ถ้ามีค่าให้แสดงค่าเป็น 1
    // empty(); ใชในการตรวจสอบค่าว่างถ้าเป็น null ก็จะเป็น 1 ถ้ามีค่าจะไม่แสดงอะไร
    
    // $username = "Brocode";
    // $username = null;
    
    // if(isset($username)){
    //     echo"This variable is set";
    // }else{
    //     echo "This variable is not set";
    // }

    // if(empty($username)){
    //     echo"This variable is empty";
    // }else{
    //     echo "This variable is not empty";
    // }
    
    // echo empty($username);
    // echo isset($username);

?>