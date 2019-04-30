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
                    <?php
                    if(!isset($_SESSION['ID']))
                    {
                        echo ' <li><a href="index.php">HOME</a></li>
                    <li><a href="SIGNUP.php">SIGN UP</a></li> ';
                    }
                    else {
                        echo ' <li><a href="index.php">HOME</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php

    if(!isset($_SESSION['ID']))
    {
       echo '  <div class="login">
        <div class="container">
            <h1>Welcome!</h1>
            <br>
            <form method="POST" action="login.inc.php">
                <input type="text" name="username" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login"<br>
            </form>';
                if( isset($_GET['info']) && $_GET['info']=='wrong')
                    echo '<p style="text-align: center;color: red;font-size: 20px">The username or password you entered is incorrect. Please try again.</p>';
            echo   '</div></div>';
    }
    else
    {
        echo 'You are logged, '.$_SESSION['username'];
        echo '<div class="login">
        
            <h1>Welcome!</h1>
            <br>
            
            <form method="POST" action="logout.inc.php">
                <input class="login"  type="submit" value="Log Out">
               </form>
       
    </div>';
    }
    ?>



</body>
</html>
