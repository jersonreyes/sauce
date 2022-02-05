<html>
	<head>
		<title>IT 304 - Home</title>
		<style>
			#rating {
				display: grid;
				grid-template-columns: repeat(4, 1fr);
				gap: 10px;
			}

			.container {
				border-radius: 40px;
				background-color: black;
				color: White;
				padding-top: 10%;
				border: 1px solid rgba(0, 0, 0, 0.2);
				text-align: center;
			}

			form {
				padding: 5% 7% 5% 7%;
				margin-left: auto;
				margin-right: auto;
				width: 70%;
				border-radius: 20px;
			}

			html {
				font-family: arial;
				background-color: gray;
			}

			p {
				color: white;
			}

			input:not([type="submit"], [type="range"]) {
				padding: 3% 10%;
				border-radius: 20px;
				background-color: lightgray;
				text-transform: uppercase;
				color: black;
				text-align: center;
				font-size: 20px;
                width:100%;
				border: 1px solid white;
			}

			input:not([type="submit"], [type="range"])::placeholder {
				color: black;
			}

			.submit {
				background-color: white;
				color: black;
				margin-top: 40px;
				width: 290px;
				padding: 2% 1%;
			}

			input[type="submit"] {
				background-color: transparent;
				margin-top: 30px;
				border-radius: 10px;
				padding: 10px 70px;
				color: white;
				border: none;
				outline: none;
				border: 1px solid rgba(255, 255, 255, 0.5);
				transition: .2s ease-in-out;
			}

			input[type="submit"]:hover {
				background-color: white;
				color: black;
				border: 1px solid black;
			}

			h1 {
				line-height: 0.2;
				font-size: 20px;
                font-size:0.9vw;
				letter-spacing: 0.4vw;
				text-transform: uppercase;
			}

			input[type="range"]::-webkit-slider-thumb {
				-webkit-appearance: none;
				background: white;
				height: 20px;
				border: 1px solid black;
				border-radius: 100%;
				width: 20px;
			}

			input[type="range"] {
				background-color: skyblue;
				-webkit-appearance: none;
				margin-top: 5%;
				height: 2px;
			}

			#checkboard td {
				height: 4vh;
				width: 4vh;
			}

			#checkboard {
				margin-left: auto;
				margin-right: auto;
			}

			.black {
				background-color: black;
			}

			table {
				border: 5px solid white;
				background-color: white;
			}
		</style>
	</head>
    <body>
		<h1 style="font-size:2vw;text-align:center;color:white;width:100%;padding: 2% 0 1% 0">RATE</h1>
		<div id="rating">
			<div class="container" id="form1"> 
                <?php
                    date_default_timezone_set('Asia/Shanghai');
                    echo "The hour is: " . date("H") . "<br/>";
                    if(date("H") > 20)
                        echo "Good PM!";
                    else
                        echo "Good AM!";
                ?> 
                <br/><br/><br/><br/>
                <h1>Time</h1>
				<form method="GET" action="?#form1">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="1_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit1">
				</form>
			</div>
			<div class="container" id="form2"> 
                <?php
                    if(isset($_GET["string5"]))
                        for($ctr=0; $ctr < $_GET["string5"]; $ctr++)
                            echo "This is letter: " . range('A', 'Z')[$ctr] . "<br/>";
                ?> 
                <br />
				<h1>List Letters</h1>
				<form method="GET" action="?#form2">
					<input name="string5" placeholder="Number" /><br />
					<input type="submit" value="Run"></input><br /></br>
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="2_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit2">
				</form>
			</div>
			<div class="container" id="form3"> 
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
                <br /><br />
				<h1>Count with Dash</h1>
				<form method="GET" action="?#form3">
					<input name="string6" placeholder="Number" /><br />
					<input type="submit" value="Run"></input><br /></br>
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="3_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit3">
				</form>
			</div>
			<div class="container" id="form4"> 
                <?php
                $default = 10;
                    for($i = 1; $i <= $default; $i++) {
                        if($i == 2 || $i == 6 || $i == 9) {
                            echo "Web <br/>";
                        }   else {
                            echo $i."<br/>";
                        }
                    }
                ?> <br />
				<h1>Replace by Web</h1><br /><br />
				<form method="GET" action="?#form4">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="4_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit4">
				</form>
			</div>
			<div class="container" id="form5">
				<form method="GET" action="?#form5">
					<input name="string" placeholder="Sentence" /><br />
					<input type="submit" value="GET LONGEST WORD"></input><br /><br /> 
                    <?php
                        if(isset($_GET["string"])) {
                            $string = $_GET["string"];
                            echo "The text is: " . $string . "<br/>";
                            $split = explode(" ", $string);
                            $longest = "";
                            
                            foreach($split as $words)
                                if(strlen($words) > strlen($longest))
                                    $longest = $words;
                        
                            echo "The longest word is: " . $longest;
                        }
                    ?>
				</form>
				<h1>Longest Word</h1>
				<form method="GET" action="?#form5">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="5_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit5">
				</form>
			</div>
			<div class="container" id="form6">
				<form method="GET" action="?#form6">
					<input name="year" placeholder="Year" /><br />
					<input type="submit" value="Check"></input><br /><br /> 
                    <?php
                        if(isset($_GET["year"])) {
                            $year = $_GET["year"];
                            if($year % 4 == 0 && (!($year % 100 == 0) || $year % 400 == 0)) {
                                echo "It is a leap year";
                            }   else 
                                echo "It is NOT a leap year";
                        
                        }
                    ?>
				</form>
				<h1>Is leap year</h1>
				<form method="GET">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="6_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit6">
				</form>
			</div>
			<div class="container" id="form7">
				<form method="GET" action="?#form7">
					<input name="column" placeholder="Column" style="width:50%;display:inline-block" />
					<input name="row" placeholder="Row" style="width:40%;display:inline-block" /><br />
					<input type="submit" value="Generate"></input><br /><br />
					<table id="checkboard" border='1' style='border-collapse: collapse'> 
                    <?php
                        if(isset($_GET["column"])) {
                            $row_num = $_GET["row"];
                            $col_num = $_GET["column"];

                            for($row = 0; $row < $row_num; $row++) {
                                echo "<tr>";
                                for($col = 0; $col < $col_num; $col++)
                                    if(($col+$row+1) % 2 != 0)
                                        echo "<td class='black'></td>";
                                    else
                                        echo "<td></td>";

                                echo "</tr>";
                            }
                        }
                     ?> 
                    </table>
				</form>
				<h1>Chessboard</h1>
				<form method="GET" action="?#form7">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="7_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit7">
				</form>
			</div>
			<div class="container" id="form8">
				<form method="GET" action="?#form8">
					<input name="string2" placeholder="Sentence" /><br />
					<input type="submit" value="Convert"></input><br /><br /> 
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
				<h1>Sentence Case</h1>
				<form method="GET" action="?#form8">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="8_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit8">
				</form>
			</div>
			<div class="container" id="form9">
				<form method="GET" action="?#form9">
					<input name="string3" placeholder="Sentence/Word" /><br />
					<input type="submit" value="Check"></input><br /><br /> 
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
				<h1>Vowels</h1>
				<form method="GET" action="?#form9">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="10_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit10">
				</form>
			</div>
			<div class="container" id="form10">
				<form method="GET" action="?#form10">
					<input name="string4" placeholder="Word" /><br />
					<input type="submit" value="Check"></input><br /><br /> 
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
				<h1>Palindrome</h1>
				<form method="GET" action="?#form10">
					<input type="range" oninput="this.nextElementSibling.value = this.value" name="11_rating" value="0" max="100" min="0">
					<output>0</output><br />
					<input type="submit" value="Rate" name="submit11">
				</form>
			</div>
		</div>
	</body>
</html>