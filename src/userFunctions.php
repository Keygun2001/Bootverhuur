<?php
require_once('databaseFunctions.php');

function registerUser($firstName,$lastName,$email,$password){
    $result = db_insertData("INSERT INTO Verhuur(FirstName, LastName, PhoneNumber, Email)VALUES ('$firstName','$lastName','$phonenumber','$email')");
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
