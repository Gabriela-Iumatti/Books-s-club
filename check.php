<?php 
session_start();
if(!$_SESSION["users"]){
    header("location:/Account/index.php");
    exit();
}
?>
