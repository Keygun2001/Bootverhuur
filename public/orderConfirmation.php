<?php
  include('server.php');
  include("../config/database.php");
  include('header.php');
  include_once('../src/databaseFunctions.php');
  
  include_once('../src/userFunctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bedankt voor het huren van <?php echo "Deze boot " .$_SESSION['BoatName']; ?></h1>

    
</body>
</html>