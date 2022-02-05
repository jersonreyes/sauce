<html>

<head>
    <title>IT 304 - Forgot</title>
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

        .submit {
            width: 100%;
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

        .login {
            color: black;
            text-decoration: none;
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div>
        <form action="#">
            <h1 align="center">IT 304 Codes</h1>
            <h4 align="center">Fill the fields below to reset your password.</h4><br />
            <div class="container">
                <label for="email">Username or email</label><br />
                <input name="email" placeholder="jdelacruz or jdelacruz@bulsu.edu.ph">
            </div>
            <br/>
            <div class="container">
                <input type="submit" class="submit" value="Proceed">
            </div>
        </form>
    </div>
</body>

</html>