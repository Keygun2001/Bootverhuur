<?php
<<<<<<< HEAD
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
$luxeID="";

if(isset($_POST['saveorder'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $phonenumber=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $password=$_POST['passWord'];
    $bootID = $_POST['bootSelect'];
    $dagdeelID = $_POST['dagdeelSelect'];
    $date = $_POST['DatumSelect'];
    $luxeID = $_POST['LuxeSelect'];
    
    $newOrder = registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID, $dagdeelID,$date,$luxeID);
    //die($newOrder);
    $_SESSION['tempOrderID'] = $newOrder;
    header("Location:orderConfirmation.php");
}
=======
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
>>>>>>> 42adab8e2c25114b5abc61bea2c1167685fba88d
    
?>