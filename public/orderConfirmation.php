<?php
  include('header.php');
  include('server.php');
  include_once('../src/databaseFunctions.php');
  include_once('../src/userFunctions.php');
  
  $orderID = $_SESSION['tempOrderID'];

  $order = db_getData("SELECT * FROM verhuur WHERE id=$orderID");
  $order = $order->fetch_array();


  $bootID = $order['BootID'];
  $boot = db_getData("SELECT * FROM boot WHERE id=$bootID");
  $boot = $boot->fetch_array();

  $dagID = $order['DagID'];
  $dagdeel = db_getData("SELECT * FROM dagdeel WHERE id=$dagID");
  $dagdeel = $dagdeel->fetch_array();
?>
<body>
    <h1>
        Bedankt voor het huren van <?php echo "Deze boot " .$boot['BoatName']; ?> 
    </h1>
    <h2>
        Dagdeel: <?php echo $dagdeel['DayPart'] ?>
    </h2>
    <h2>
        Datum: <?php echo $order['DateVerhuur']; ?>
    </h2>
    <h1>
        Uw Gegevens
    </h1>
    <p>
        Voornaam:  <?php echo $order['FirstName']; ?>
    </p>
    <p>
        Achternaam:  <?php echo $order['LastName']; ?>
    </p>
    <p>
        Telefoon Nummer:  <?php echo $order['PhoneNumber']; ?>
    </p>
    <p>
        Email: <?php echo $order['Email']; ?>
    </p>
    <p>
        Prijs:€ <?php  if($dagdeel['DayPart'] == "Hele Dag") 
        { 
            echo  15* $boot['Price']; 
        }
        else{
            echo 5 * $boot['Price'];
        }

        ?>
    </p>
</body>

<?php 
    include('footer.php')
?>