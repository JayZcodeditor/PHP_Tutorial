<?php
    // $age = -1;

    // if ($age >= 18) {
    //     echo"You may enter this site";
    // }else if ($age <= 0) {
    //     echo "That wasn't a valid age";
    // }elseif ($age >= 100) {
    //     echo "You are too old to enter this site";
    // }else{
    //     echo"You must be 18+ to enter";
    // }  
    
    // $adult = false;
    
    // if ($adult == true) {
    //     echo "You may enter this site";
    // }else{
    //     echo "You can't enter this site";
    // }

    $hours = 41;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <=0) {
        $weekly_pay = 0;
    }elseif($hours <= 40 ) {
        $weekly_pay = $hours * $rate;
    }else{
        $weekly_pay = ($rate * 40) + (($hours - 40)* ($rate*1.5));
    }

    echo "You made \${$weekly_pay} this week"


?>  