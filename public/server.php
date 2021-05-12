<?php
include('../src/databaseFunctions.php');
include('../src/userFunctions.php');
session_start();
$firstName="";
$lastName="";
$phonenumber="";
$email="";
$password="";
$bootID = "";
$dagdeelID = "";
$id = 0;

if(isset($_POST['saveorder'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $phonenumber=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $password=$_POST['passWord'];
    $bootID = $_POST['bootSelect'];
    $dagdeelID = $_POST['dagdeelSelect'];
    $date = $_POST['DatumSelect'];
    
    $newOrder = registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID, $dagdeelID,$date);
    //die($newOrder);
    $_SESSION['tempOrderID'] = $newOrder;
    header("Location:orderConfirmation.php");
}
    
?>