<?php 
session_start(); //messagem it is working
include_once("connect.php");
// recived data from index.php


$firstname = filter_input(INPUT_POST,'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST,'lastname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$passwordu = filter_input(INPUT_POST,'passwordu', FILTER_SANITIZE_STRING);



//check
//echo"firstname:$firstname<br>";
//echo"lastname:$lastname<br>";
//echo"email:$email<br>";
//echo"passwordu:$passwordu<br>";


//query
$result = "INSERT INTO user (firstname, lastname, email, passwordu) VALUE ('$firstname', '$lastname', '$email', '$passwordu')";
$return = mysqli_query($conn, $result);

//test safely saved
if(mysqli_insert_id($conn)){
    $_SESSION["msg"] = "<p style='color:blue;'> User properly registered.</p>";
    header("localtion:index.php");
}

else{
    $_SESSION["msg"] = "<p style='color:red;> User properly NOT registered book.</p>";
    header("localtion:index.php");
}
?>
