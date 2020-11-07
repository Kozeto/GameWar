<?php

session_start();
//header('location:login.php');

?>

<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "game war";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
?>

<?php


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$propic = $_POST['pic'];

$s = "select * from user where userEmail = '$email'";

$result = mysqli_query($connection, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Already Taken";
}else{
    $reg = "insert into user(userFirstname,userLastname,userEmail,userPassword,userpic) values('$firstname','$lastname','$email','$password','$propic')";
    mysqli_query($connection, $reg);
    header('location:index.php');
    //echo"Registration Successful";
}
    
?>

