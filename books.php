<?php 
session_start(); //messagem it is working
include_once("connect.php");
// recived data from index.php


$title = filter_input(INPUT_POST,'title', FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST,'autor', FILTER_SANITIZE_STRING);
$publ = filter_input(INPUT_POST,'publ', FILTER_SANITIZE_STRING);

//check
//echo"title:$title<br>";
//echo"autor:$autor<br>";
//echo"publ:$publ<br>";

//query
$result = "INSERT INTO books (title, autor, publ) VALUE ('$title', '$autor', '$publ')";
$return = mysqli_query($conn, $result);

//test safely saved
if(mysqli_insert_id($conn)){
    $_SESSION["msg"] = "<p style='color:blue;'> Book properly registered.</p>";
    header("localtion:index.php");
}

else{
    $_SESSION["msg"] = "<p style='color:red;> Book properly NOT registered.</p>";
    header("localtion:index.php");
}
?>
