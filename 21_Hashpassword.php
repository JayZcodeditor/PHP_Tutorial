<?php

$password = "Helloworld";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";
// เป็นตัวเช็ค possword ถ้าถูกหรือป่าว
if(password_verify("hamburger666", $hash)){
    echo "You are logged in!";
}
else{
    echo "Incorrect password";
}

?>