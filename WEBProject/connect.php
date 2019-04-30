<?php

$connect = mysqli_connect('localhost','root','','signup');

if(!$connect){
    die(mysqli_connect_error());
}