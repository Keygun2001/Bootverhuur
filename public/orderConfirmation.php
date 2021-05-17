<?php

  include('server.php');
  include("../config/database.php");
  include('header.php');
  include('server.php');
  include_once('../src/databaseFunctions.php');
  include_once('../src/userFunctions.php');
  
  $orderID = $_SESSION['tempOrderID'];

  $order = db_getData("SELECT * FROM verhuur WHERE id=$orderID");
  $order = $order->fetch_array();

    $bootID = $order['BootID'];
    $boot = db_getData("SELECT * FROM Boot WHERE id=$bootID");
    $boot = $boot->fetch_array();

    $dagID = $order['DagID'];
    $dagdeel = db_getData("SELECT * FROM Dagdeel WHERE id=$dagID");
    $dagdeel = $dagdeel->fetch_array();
    
    $Luxe = $order['LuxeID'];
    $optie = db_getData("SELECT * FROM Optie WHERE id=$Luxe");
    $optie = $optie->fetch_array();
    
  //die(print_r($dagdeel));

  
?>
<body>
<h1>Bedankt voor het huren van <?php echo "Deze boot " .$boot['BoatName']; ?> </h1>
<h2>Dagdeel: <?php echo $dagdeel['DayPart'] ?></h2>
<h2>Datum: <?php echo $order['DateVerhuur']; ?></h2>
<h1>Uw Gegevens</h1>
<p>Voornaam:  <?php echo $order['FirstName']; ?></p>
<p>Achternaam:  <?php echo $order['LastName']; ?></p>
<p>Telefoon Nummer:  <?php echo $order['PhoneNumber']; ?></p>
<p>Email: <?php echo $order['Email']; ?></p>
<p>Prijs:€ <?php  if($dagdeel['DayPart'] == "Hele Dag") 
    { 
        echo  15* $boot['Price']; 
    }
    else{
        echo 5 * $boot['Price'];
    }
?></p>
<p>Prijs voor de optie <?php echo $optie['Luxe']?>:€ <?php if($optie['Luxe'] == "Kapitein")
{
  echo $optie['PriceL'];
} 
else{
  echo $optie['PriceL'];
}?>

</p>

<!-- <p>Wachtwoord </p> -->

    
</body>

<?php 
    include('footer.php')
?>