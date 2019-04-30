<?php
session_start();
require 'connect.php';

if(!empty( $_POST['firstname']) && !empty($_POST['secondname']) && !empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['username']) && isset($_POST['password']))
{

    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT username FROM users WHERE username='$username'";
    $result = mysqli_query($connect,$sql);
    $check = mysqli_num_rows($result);

    if($check > 0 ) {
        header("Location: SIGNUP.php?info=exists");
        die();
    }
    else{
        $sql = "INSERT INTO users (firstname, secondname, username, password) VALUES('$firstname','$secondname','$username','$password_hashed')";
        $result = mysqli_query($connect, $sql);
        header("Location: SIGNUP.php?info=ok");
    }

}
else {
    header("Location: SIGNUP.php?info=eroare");
}