<?php
    $number1 = 56789;
    $number2 = 65234;
    $number3 = 10234;
    echo "The given numbers are: ".$number1.",".$number2.",".$number3."<br>";
    if($number1>$number2 && $number1>$number3)
        {
            echo "The number ".$number1." is the largest number.";
        }
    else if($number2>$number1 && $number2>$number3){
            echo "The number ".$number2." is the largest number.";
        }
    else{
        echo "The number ".$number3." is the largest number.";
    }
    
    
?>