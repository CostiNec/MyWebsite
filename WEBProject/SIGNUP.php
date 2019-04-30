<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTH-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <title>DOCUMENT</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<div>
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/LOGO.png"></a>
            </div>

            <div class="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="SIGNUP.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login">
        <div class="container">
            <h1>Sign UP</h1>
            <br>
            <form method="POST" action="signup.inc.php">
                <input type="text" name="firstname" placeholder="First Name"><br>
                <input type="text" name="secondname" placeholder="Second Name"><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="text" name="username" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Sign UP"<br>
            </form>
            <?php
                if (isset($_GET['info']) && $_GET['info']=='ok'){
                    echo '<p style="text-align: center;color: green;font-size: 20px">Your account was successfully created!</p>';
                }
                else if(isset($_GET['info']) && $_GET['info']=='exists')
                        echo '<p style="text-align: center;color: red;font-size: 20px">This username is already used!</p>';
                else if (isset($_GET['info']) && $_GET['info']=='eroare')
                        echo '<p style="text-align: center;color: red;font-size: 20px">Complete the empty fields!</p>';
                else if (isset($_GET['info']) && $_GET['info']=='lowpws')
                        echo '<p style="text-align: center;color: red;font-size: 20px">The password must have atleast 6 caracters!</p>';
                else if (isset($_GET['info']) && $_GET['info']=='email')
                    echo '<p style="text-align: center;color: red;font-size: 20px">Invalid email!</p>';
                else if (isset($_GET['info']) && $_GET['info']=='userwrong')
                    echo '<p style="text-align: center;color: red;font-size: 20px">Invalid username!The username must not contain any symbols or spaces!</p>';
            ?>

            <br>
        </div>
        </body>
</html>

