<?php 
session_start(); //messagem it is working
include_once("connect2.php");
// recived data from index.php


$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$passwordu = filter_input(INPUT_POST,'passwordu', FILTER_SANITIZE_STRING);

//check
//echo"firstname:$firstname<br>";
//echo"email:$email<br>";
//echo"passwordu:$passwordu<br>";

//check
if(empty($_POST["email"]) || empty($_POST["passwordu"])) {
    header("location:index.php");
    exit();
}
$email =mysqli_real_escape_string($conn,$_POST["email"]);
$passwordu =mysqli_real_escape_string($conn,$_POST["passwordul"]);

//query
$query ="select users_id, users where email = {$email} and password = md5('{$passwordu}')";
$result = mysqli_query($connect2, $query);
$row = mysqli_num_rows($result);

//test safely connect
if($row == 1){
    $_SESSION["users"] = $users;
    header("localtion:/panel/panel.php");
    exit();
}else{
    $_SESSION["not_finded"] = true;
    header("localtion:/Users/index.php");
    exit();
}
?>
