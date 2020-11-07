<?php

session_start();

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

$email = $_POST['email'];
$password = $_POST['pass'];

$s = "select * from user where userEmail = '$email' && userPassword= '$password'";

$result = mysqli_query($connection, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['userEmail'] = $email;
    echo"success";
    header('location:index.php');
}else{
    header('location:login.php');
}
?>


