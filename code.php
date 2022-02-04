<?php
/*
    $time = date("H");
    if($time > 20) {
        echo "Good PM!";
    }   else {
        echo "Good AM!";
    }

    echo "<br/>";

    $alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    $ctr = 1;
    foreach($alphabet as $letters) {
        echo "This is letter: " . $letters . "<br/>";
        $ctr++;
        if($ctr > 20) {
            break;
        }
    }

    $number = 20;
    for($i = 1; $i <= $number; $i++) {
        if($i==1) {
            echo $i;
        }   else {
            echo "-".$i;
        }
    }

    echo "<br/>";
    $default = 10;
    for($i = 1; $i <= $default; $i++) {
        if($i == 2 || $i == 6 || $i == 9) {
            echo "Web <br/>";
        }   else {
            echo $i."<br/>";
        }
    }

    
    
    $string = "My name is Jordan Isaac";
    $split = explode(" ", $string);
    $temp = "";
    for($i = 0; $i < sizeOf($split); $i++) {
        if(strlen($split[$i]) > strlen($temp)) {
            $temp = $split[$i];
        }
    }
    echo $temp;
    

    

    $year = 2100;
    if($year % 4 == 0 && (!($year % 100 == 0) || $year % 400 == 0)) {
        echo "It is a leap year";
    }   else 
        echo "It is NOT a leap year";

    $row_value = 4;
    $column = 5;

    echo "\n<table border='1' style='border-collapse: collapse'>";

    for($row = 0; $row < $row_value; $row++) {
        echo "<tr>\n";
        for($col = 0; $col < $column; $col++) {
            if($col%2 == 0 && ($row+1)%2 != 0)  {
            echo "<td class='black'></td>\n";
            }
            else if(($row+1)%2 ==0 && $col%2 != 0)
            echo "<td class='black'></td>\n";
            else {
            echo "<td></td>\n";
           }
        }
        echo "</tr>\n";
    }
    echo "</table>";
    

    $string =  "the quick brown fox";
    $split = explode(" ", $string);
    foreach($split as $words) {
        $words[0] = strtoupper($words[0]);
        echo " ". $words;
    }
    

    $vowels = array("a", "e", "i", "o", "u");
    $string = "Hello, Web Development World!";
    $ctr=0;
    for($i = 0; $i < strlen($string); $i++) {
        foreach($vowels as $vowel) {
            if($vowel == $string[$i]) {
                $ctr++;
            }
        }
    }
    echo "Sample String: ".$string. "<br/>";
    echo "The number of vowels is: ".$ctr;
   */
    $string="madam";
    echo "Default String: " . $string . "<br/>";
    if(strrev($string) == $string)
    echo "It is a palindrome";
    else
    echo "it is NOT a palindrome";

?>

<html>
    <style>
        td {
            padding: 30px;
        }

        .black {
            background-color:black;
        }
    </style>
</html>