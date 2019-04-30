<?php
session_start();

require 'connect.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){

    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($connect, $sql);

    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $check = password_verify($password, $hash);

    if($check == 0){
        header("Location: index.php?info=wrong");
        die();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
        $result = mysqli_query($connect, $sql);

        if(!$row = $result->fetch_assoc()){
         echo 'nu merge';
         die();
        }
        else {

            $_SESSION['ID'] = $row['ID'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['secondname'] = $row['secondname'];
            $_SESSION['username'] = $row['username'];

        }
        header("Location: index.php");
    }

}

else
{
    header("Location: index.php?info=wrong");
}
