<?php

    include('../src/userFunctions.php');
    $firstName="";
    $lastName="";
    $phonenumber="";
    $email="";
    $password="";
    $bootID = "";

    if(isset($_POST['saveorder'])){
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $phonenumber=$_POST['phoneNumber'];
        $email=$_POST['email'];
        $password=$_POST['passWord'];
        $bootID = $_POST['bootSelect'];
        registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID);
        header('Location: orderConfirmation.php');
        // header("Location:orders.php");
    }
?>