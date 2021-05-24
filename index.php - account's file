<?php 
session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book's Registration</title>
<!-- Account index.php -->
  
  </head>
<body>
    <h1>Book Registred</h1>
    <?php 
    if(isset($_SESSION["msg"]))
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    ?>
<div>
<!-- form register-->
    <form  method="POST" action="account.php">
        <div class="container">
        <!--rows-->
            <div class="row">
                <!--espace columns-->
                <div class="col-sm-3">
                    <h1>Register</h1>
                    <p>Do your register<p>
                        <hr class="mb-3"> <!-- espace rows-->
                     <label for="title"> <b>title</b></label>
                     <input class="form-control" type="text"  name="title">
<br>
                    <label for="autor"> <b>autor</b></label>
                    <input class="form-control" type="text" name="autor" required>
<br>
                    <label for="publ"> <b>publishing house</b></label>
                    <input class="form-control"  type="text" name="publ" required>
                        <hr class="mb-3">
<br>                       
                   <input class="btn btn-primary" type="submit"  formaction url= "db_register.sql" name="create" velue = "Register"> <!--btn highlighted-->
                   <input class="btn btn-primary" type="submit"  formaction url= "db_delete.sql"name="create" velue = "Delete"> <!--btn highlighted-->
                   <input class="btn btn-primary" type="submit"  formaction url= "db_edit.sql"name="create" velue = "Edit"> <!--btn highlighted-->
                </div>
            </div>
        </div>
    </form>
</div>

<!-- form book reservation-->
<form  method="POST" action="reserve.php">
        <div class="container">
        <!--rows-->
            <div class="row">
                <!--espace columns-->
                <div class="col-sm-3">
                    <h1>Register</h1>
                    <p>Do your register<p>
                        <hr class="mb-3"> <!-- espace rows-->
                     <label for="title"> <b>title</b></label>
                     <input class="form-control" type="text"  name="title">
                        <hr class="mb-3">
<br>                       
                   <input class="btn btn-primary" type="submit"  formaction url= "/Account/db_reserved.sql" name="create" velue = "Reserve"> <!--btn highlighted-->
                </div>
            </div>
        </div>
    </form>
</div>
</body>
<footer> 
<input class="btn btn-primary" type="submit"  formaction url= "/Users/index.php" name="create" velue = "Exit"> <!--btn highlighted-->
</footer>
</html>
