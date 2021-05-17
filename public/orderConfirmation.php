<?php

  include('server.php');
  include('header.php');
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
  <div class="container py-12">
    <div class="flex justify-center items-center w-full">
      <div class="flex w-8/12">
        <div class="w-4/12 redcard">
          <h2>
            Bedankt voor het huren van <?php echo "de " .$boot['BoatName']; ?> 
          </h2>
          <div>
            <p class="mt-4">
              Dagdeel: <?php echo $dagdeel['DayPart'] ?>
            </p>
          </div>
          <p class="mt-4">
            Datum: <?php echo $order['DateVerhuur']; ?>
          </p>
        </div>
        <div class="w-8/12 greycard">
          <h2>
            Uw gegevens
          </h2>
          <div class="mt-4">
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
              Prijs:€ 
              <?php  
                if($dagdeel['DayPart'] == "Hele Dag") { 
                    echo  15* $boot['Price']; 
                }else{
                    echo 5 * $boot['Price'];
                }
              ?>
            </p>
            <!-- <p>
              Prijs voor de optie <?php echo $optie['Luxe']?>:€ <?php if($optie['Luxe'] == "Kapitein")
              {
                echo $optie['PriceL'];
              } 
              else{
                echo $optie['PriceL'];
              }?>

            </p> -->
          </div>  
        </div>
      </div>
    </div>
  </div>
</body>

<?php 
    include('footer.php')
?>