<?php
session_start(); 
include_once("check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected</title>
</head>
</body>
<?php echo $_SESSION["users"];?>
<h2><a herf="logout.php">Logout</a></h2>
</body>
</html>