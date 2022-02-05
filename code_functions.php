<?php
    $breakline = "<br/><br/><br/>";

    //CHECK IF DAY AND EVENING
    echo "The hour is: " . date("H") . "<br/>";
    if(date("H") > 20)
        echo "Good PM!";
    else
        echo "Good AM!";

    ////////////////
    echo $breakline;
    ////////////////

    //OUTPUT ALPHABET
    for($ctr=0; $ctr < 20; $ctr++)
        echo "This is letter: " . range('A', 'Z')[$ctr] . "<br/>";
    
    ////////////////
    echo $breakline;
    ////////////////

    //OUTPUT NUMBERS WITH DASH
    $number = 20;
    for($i = 1; $i <= $number; $i++)
        if($i==1)
            echo $i;
        else
            echo "-".$i;

    ////////////////
    echo $breakline;
    ////////////////

    //REPLACE 2,6,9 WITH WEB
    $default = 10;
    for($i = 1; $i <= $default; $i++)
        if($i == 2 || $i == 6 || $i == 9)
            echo "Web <br/>";
        else 
            echo $i."<br/>";

    ////////////////
    echo $breakline;
    ////////////////

    //GET LONGEST WORD
    $string = "My name is Jordan Isaac";
    echo "The text is: " . $string . "<br/>";
    $split = explode(" ", $string);
    $longest = "";
    
    foreach($split as $words)
        if(strlen($words) > strlen($longest))
            $longest = $words;

    echo "The longest word is: " . $longest;

    ////////////////
    echo $breakline;
    ////////////////

    //CHECK IF LEAP YEAR
    $year = 2100;
    echo "The year is: " . $year . "<br/>";
    if($year % 4 == 0 && (!($year % 100 == 0) || $year % 400 == 0))
        echo "It is a leap year";
    else 
        echo "It is NOT a leap year";
    
    ////////////////
    echo $breakline;
    ////////////////

    //CHESSBOARD
    $row_num = 10;
    $col_num = 10;

    echo "<table border='1' style='border-collapse: collapse'>";

    for($row = 0; $row < $row_num; $row++) {
        echo "<tr>";
        for($col = 0; $col < $col_num; $col++)
            if(($col+$row+1) % 2 != 0)
                echo "<td class='black'></td>";
            else
                echo "<td></td>";

        echo "</tr>";
    }
    echo "</table>";
    
    ////////////////
    echo $breakline;
    ////////////////

    //CONVERT TO SENTENCE CASE
    $string =  "the quick brown fox";
    echo "The string is: " . $string . "<br/> Output: ";
    echo ucwords($string);
    
    ////////////////
    echo $breakline;
    ////////////////
    
    //COUNT VOWELS
    $string = "Hello, Web Development World!";
    echo "Sample String: ".$string. "<br/>";
    echo "The number of vowels are: ".preg_match_all('/[aeiou]/i', $string);;
    
    ////////////////
    echo $breakline;
    ////////////////
    
    //PALINDROME
    $string="madam";
    echo "Default String: " . $string . "<br/>";
    if($string == strrev($string))
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

        table {
            border: 5px solid black;
        }
    </style>
</html>