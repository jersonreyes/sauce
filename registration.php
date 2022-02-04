<html>

<head>
    <title>IT 304 - Register</title>
    <?php
       session_start();
        if(isset($_POST["register_submit"])) {
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["middlename"] = $_POST["middlename"];
            $_SESSION["lastname"] = $_POST["lastname"];
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["cpassword"] = $_POST["cpassword"];
            $_SESSION["birthday"] = $_POST["birthday"];
            $_SESSION["country"] = $_POST["country"];
            $_SESSION["type"] = $_POST["type"];
            $_SESSION["address"] = $_POST["address"];
            $_SESSION["gender"] = $_POST["gender"];
        }
    ?>
    <style>
        .container {
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            margin-top: 5%;
            padding: 2% 7% 1% 7%;
            margin-left: auto;
            margin-right: auto;
            width: 500px;
            border-radius: 20px;
            box-shadow: 0px 1px 22px 0px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 20px;
            color: Gray;
        }

        html {
            font-family: arial;
            background-color: rgb(240, 232, 255);
        }

        select {
            padding: 10px 82px;
        }

        .container input:not([type=radio], [type=file], [type=reset], [type=submit]) {
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            border: 1px solid #f2f2f2;
            box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            font-size: 17px;
            font-family: arial;
        }

        .submit, .reset {
            width: 49%;
            display: inline;
            background-color: black;
            color: White;
            padding: 5%;
        }

        h4 {
            font-weight: normal;
            color: gray;
        }

        h1 {
            line-height: 0.2;
        }

        .gender, .picture {
            width: 50%;
        }

        .login {
            color: black;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div>
        <form action="?" method="POST">
            <h1 align="center">IT 304 Shop</h1>
            <h4 align="center">Fill the fields below to register.</h4><br />
            <div class="container">
                <label for="email">Email</label><br />
                <input name="email" placeholder="jdelacruz@bulsu.edu.ph">
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <label for="firstname">First Name</label><br />
                            <input name="firstname" placeholder="Juan">
                        </td>
                        <td>
                            <label for="middlename">Middle Name</label><br />
                            <input name="middlename" placeholder="Optional">
                        </td>
                        <td>
                            <label for="lastname">Last Name</label><br />
                            <input name="lastname" placeholder="Dela Cruz">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <label for="username">Username</label><br />
                <input name="username" placeholder="jdelacruz">
            </div>
            <div class="container">
                <label for="password">Password</label><br />
                <input name="password">
            </div>
            <div class="container">
                <label for="cpassword">Confirm Password</label><br />
                <input name="cpassword">
            </div>
            <div class="container">
                <label for="birthday">Birthday</label><br />
                <input type="date" name="birthday">
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td>
                            <label for="country">Country</label><br />
                            <select name="country" id="country">
                                <option value="us">United States</option>
                                <option selected>Philippines</option>
                            </select>
                        </td>
                        <td><label for="type">Type</label><br />
                            <select name="type" id="type">
                                <option value="seller">Seller</option>
                                <option selected>Buyer</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <label for="address">Address</label><br />
                <input name="address">
            </div>
            <div class="container">
                <table>
                    <tr>
                        <td class="gender">
                            <label>Gender</label><br /><br />
                            <input type="radio" name="gender" id="male" value="M" checked>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="F">
                            <label for="female">Female</label>
                        </td>
                        <td class="picture">
                            <label for="Picture">Profile Picture:</label><br /><br />
                            <input type="file" accept="image/*" name="Picture" id="Picture" id="picture">
                        </td>
                    </tr>
                </table>
            </div>
            <a href="login.php" class="login"><i>Login instead</i></a><br /><br />
            <div class="container">
                <input type="reset" class="reset">
                <input type="submit" name="register_submit" class="submit">
            </div>
        </form>
    </div>
</body>

</html>