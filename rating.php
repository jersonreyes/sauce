<html>

<head>
    <title>IT 304 - Home</title>
    <style>
        .container {
            margin-bottom: 50px;
        }
        th {
            background-color: black;
            color:White
        }

        form {
            padding: 5% 7% 5% 7%;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
            border-radius: 20px;
        }

        td {
            text-align:center;
            min-width:50px;
        }

        html {
            font-family: arial;
            background-color: rgb(255, 255, 255);
        }

        input:not([type="submit"], [type="range"]) {
            padding: 20px 40px;
            border-radius: 40px;
            color:black;
            text-align:center;
            font-size: 20px;
        }
        .container {
            padding:4% 7% 4% 2%;
            border-radius: 40px;
            background-color: #f7fdff;
            border: 1px solid rgba(0,0,0,0.2);
        }

        .submit {
            background-color: white;
            color: black;
           margin-top:40px;
            width: 290px;
            padding: 2% 1%;
        }

        input[type="submit"] {
            background-color:black;
            margin-top:30px;
            border-radius: 30px;
            padding:10px 70px;
            color:white;
            border:none;
            outline:none;
            border:1px solid rgba(0,0,0,0);
            transition: .2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color:white;
            color:black;
            border:1px solid black;
        }

        tr th:nth-child(1) {
            width:200px;
        }

        h4 {
            font-weight: normal;
            color: gray;
        }

        h1 {
            line-height: 0.2;
            font-size:20px;
            letter-spacing: 10px;
            text-transform: uppercase;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none; /* Override default look */
            background: white; /* Green background */
            height:20px;
            border: 1px solid black;
            border-radius: 100%;
            width:20px;
        }

        input[type="range"] {
            background-color:skyblue;
            -webkit-appearance: none;
            margin-top: 5%;
            height:2px;
        }

        h3 {
            font-size:20px;
        }

        table {
            width:100%;
        }

        #checkboard td {
            padding: 10%;
        }

        .black {
            background-color:black;
        }

    </style>
</head>
<?php
?>
<body>
    <div>
        <form action="#">
            <div class="container">
                <table>
                    <tr>
                        <td colspan="7">
                            <?php
                            date_default_timezone_set('Asia/Shanghai');
                            $time = date("H");
                            echo "The hour is: ".$time."<br/>";
                            if($time > 20) {
                                echo "Good PM!";
                            }   else {
                                echo "Good AM!";
                            }
                            echo "<br/><br/><br/>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Time</h1>
                            <form method="GET">
                                <input type="range" name="1_rating" value="0" max="100" min="0">
                                <br/>
                                <input type="submit" name="submit1">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td colspan="7">
                            <?php
                            if(isset($_GET["string5"])) {
                                    $alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

                                    $number = $_GET["string5"];
                                    $ctr = 1;
                                    foreach($alphabet as $letters) {
                                        echo "This is letter: " . $letters . "<br/>";
                                        $ctr++;
                                        if($ctr > $number) {
                                            break;
                                        }
                                    }
                                }
                            ?>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>List Letters</h1>
                            <form method="GET">
                            <input name="string5"/><br/>
                            <input type="submit" value="list"></input><br/></br>

                            <input type="range" name="2_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit2">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td colspan="7">
                            <?php
                            if(isset($_GET["string6"])) {
                                $number = $_GET["string6"];
                                for($i = 1; $i <= $number; $i++) {
                                    if($i==1) {
                                        echo $i;
                                    }   else {
                                        echo "-".$i;
                                    }
                                }
                            }
                            ?>
                            <br/><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Count with -</h1>
                            <form method="GET">
                            <input name="string6"/><br/>
                            <input type="submit" value="list"></input><br/></br>
                            <input type="range" name="3_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit3">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td colspan="7">
                            <?php
                                $default = 10;
                                for($i = 1; $i <= $default; $i++) {
                                    if($i == 2 || $i == 6 || $i == 9) {
                                        echo "Web <br/>";
                                    }   else {
                                        echo $i."<br/>";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Replace by Web</h1>
                            <br/><br/>
                            <form method="GET">
                            <input type="range" name="4_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit4">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td colspan="7">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <form method="GET">
                                <input name="string"/><br/>
                                <input type="submit" value="GET LONGEST WORD"></input>
                                <br/><br/>
                                <?php
                                if(isset($_GET["string"])) {
                                    $string = $_GET["string"];
                                    $split = explode(" ", $string);
                                    $temp = "";
                                    for($i = 0; $i < sizeOf($split); $i++) {
                                        if(strlen($split[$i]) > strlen($temp)) {
                                            $temp = $split[$i];
                                        }
                                    }
                                    echo $temp;
                                }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                                <h1>Longest Word</h1>
                                <form method="GET">
                                <input type="range" name="5_rating" value="0" max="100" min="0">
                                <br/>
                                <input type="submit" name="submit5">
                            </form>
                            </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                <tr>
                        <td colspan="6">
                            <form method="GET">
                                <input name="year"/><br/>
                                <input type="submit" value="Check"></input>
                                <br/>
                                <br/>
                                <?php
                                if(isset($_GET["year"])) {
                                    $year = $_GET["year"];
                                    if($year % 4 == 0 && (!($year % 100 == 0) || $year % 400 == 0)) {
                                        echo "It is a leap year";
                                    }   else 
                                        echo "It is NOT a leap year";
                                
                                    $row_value = 4;
                                    $column = 5;
                                }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Is leap year</h1>
                            <form method="GET">
                            <input type="range" name="6_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit6">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="container">
                <table>
                <tr>
                        <td colspan="6" align="center">
                            <form method="GET">
                                <input name="column" placeholder="COLUMN"/><br/>
                                <input name="row" placeholder="ROW"/><br/>
                                <input type="submit" value="Check"></input>
                                <br/>
                                <br/>
                                <table id="checkboard" border='1' style='border-collapse: collapse'>
                                <?php
                                if(isset($_GET["column"])) {
                                    $column = $_GET["column"];
                                    $row_value = $_GET["row"];

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
                                }
                            ?>
                            </table>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Checkboard</h1>
                            <form method="GET">
                            <input type="range" name="7_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit7">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                <tr>
                        <td colspan="6">
                            <form method="GET">
                                <input name="string2"/><br/>
                                <input type="submit" value="Check"></input>
                                <br/>
                                <br/>
                                <?php
                                if(isset($_GET["string2"])) {
                                    $string =  $_GET["string2"];
                                    $split = explode(" ", $string);
                                    foreach($split as $words) {
                                        $words[0] = strtoupper($words[0]);
                                        echo " ". $words;
                                    }
                                }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Sentence Case</h1>
                            <form method="GET">
                            <input type="range" name="8_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit8">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                <tr>
                        <td colspan="6">
                            <form method="GET">
                                <input name="string3"/><br/>
                                <input type="submit" value="Check"></input>
                                <br/>
                                <br/>
                                <?php
                                if(isset($_GET["string3"])) {
                                    $vowels = array("a", "e", "i", "o", "u");
                                    $string = $_GET["string3"];
                                    $ctr=0;
                                    for($i = 0; $i < strlen($string); $i++) {
                                        foreach($vowels as $vowel) {
                                            if($vowel == $string[$i]) {
                                                $ctr++;
                                            }
                                        }
                                    }
                                    echo "Sample String: ".$string. "<br/>";
                                    echo "The number of vowels are: ".$ctr;
                                }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Vowels</h1>
                            <form method="GET">
                            <input type="range" name="10_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit10">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <table>
                <tr>
                        <td colspan="6">
                            <form method="GET">
                                <input name="string4"/><br/>
                                <input type="submit" value="Check"></input>
                                <br/>
                                <br/>
                                <?php
                                if(isset($_GET["string4"])) {
                                    $string=$_GET["string4"];
                                    echo "Default String: " . $string . "<br/>";
                                    if(strrev($string) == $string)
                                    echo "It is a palindrome";
                                    else
                                    echo "it is NOT a palindrome";
                                }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center">
                            <h1>Palindrome</h1>
                            <form method="GET">
                            <input type="range" name="11_rating" value="0" max="100" min="0">
                            <br/>
                                <input type="submit" name="submit11">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>