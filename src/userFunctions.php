<?php
require_once('databaseFunctions.php');

<<<<<<< HEAD
function registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID, $dagdeelID, $date, $luxeID){
    $result = db_insertData("INSERT INTO verhuur(FirstName, LastName, PhoneNumber, Email, Password, BootID, dagID, DateVerhuur ,LuxeID) VALUES ('$firstName','$lastName','$phonenumber','$email','$password', '$bootID', '$dagdeelID' ,'$date', '$luxeID')");
=======
function registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID, $dagdeelID, $date){
    $result = db_insertData("INSERT INTO verhuur(FirstName, LastName, PhoneNumber, Email, Password, BootID, dagID) VALUES ('$firstName','$lastName','$phonenumber','$email','$password', '$bootID', '$dagdeelID')");
>>>>>>> 42adab8e2c25114b5abc61bea2c1167685fba88d
    return $result;
}

function getUser($email,$password){
    $user = db_getData("SELECT * FROM Verhuur WHERE email = '$email' AND PASSWORD ='$password'");
    if ( $user->num_rows > 0){
        return $user;
    }else{
        return "No user found";
    }
}
function checkUser($email,$password){
    $conn=db_connect();
    $sql = "SELECT * from Verhuur WHERE email='$email' AND password='$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['user'] = $row; 
    }
} else{
return "0 results";
}
}
?>
