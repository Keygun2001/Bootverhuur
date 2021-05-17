<?php 
    include('server.php');
    // include('header.php');
    include_once('../src/databaseFunctions.php');
    include_once('../src/userFunctions.php');
   
    $conn = db_connect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $boot = db_getData("SELECT * FROM Boot");
    $dagdeel = db_getData("SELECT * FROM Dagdeel");
<<<<<<< HEAD
    $optie= db_getData("SELECT * FROM Optie");
    
  
?>
<body>
    <div class="container">
        <form method="post" action="server.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="w-2/12 inputrow">
                <p>Voornaam</p>
                <input type="text" name="firstName" value="<?php echo $firstName; ?>">
            </div>
            <div class="w-2/12 mt-4 inputrow">
                <p>Achternaam</p>
                <input type="text" name="lastName" value="<?php echo $lastName; ?>">
            </div>
            <div class="w-2/12 mt-4 inputrow">
                <p>Telefoon</p>
                <input type="text" name="phoneNumber" value="<?php echo $phonenumber; ?>">
            </div>
            <div class="w-2/12 mt-4 inputrow">
                <p>Email</p>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="w-2/12 mt-4 inputrow">
                <p>Wachtwoord</p>
                <input type="password" name="passWord" value="<?php echo $password; ?>">
            </div>
            <div class=" mt-4">
            <p>Selecteer de boot die u wil huren:</p>
                <select name="bootSelect">
                    <?php 
                        while($boten = $boot-> fetch_assoc()){
                    ?>
                    <option value = "<?php echo $boten['id'];?>"><?php echo $boten['BoatName'];?></option>
                    <?php
                        }
                    ?>
                </select>
                <p>Selecteer een datum:</p>
                <input type="datetime-local" name="DatumSelect">
                <p>Selecteer een dagdeel:</p>
                <select name="dagdeelSelect">
                    <?php 
                        while($dagdelen = $dagdeel-> fetch_assoc()){
                    ?>
                    <option value="<?php echo $dagdelen['id'];?>"><?php echo $dagdelen['DayPart'];?></option>
                    <?php
                        }
                    ?>
                </select>
                <p>Nog extra opties voor de boot:</p>
                <select name="LuxeSelect">
                        <?php 
                            while($LuxeOptie = $optie-> fetch_assoc()){ ?> 
                            
                            <option value="<?php echo $LuxeOptie['id'];?>"><?php echo $LuxeOptie['Luxe']; ?></option>
                            
                            <?php } ?>
                        
                        
                      
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="knop" name="saveorder">
                    Bestellen
                </button>
            </div>
        </form>
=======
?>
<body>
    <div class="my-16">
        <div class="container">
            <form method="post" action="server.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="w-2/12 inputrow">
                    <p>Voornaam</p>
                    <input type="text" name="firstName" value="<?php echo $firstName; ?>">
                </div>
                <div class="w-2/12 mt-4 inputrow">
                    <p>Achternaam</p>
                    <input type="text" name="lastName" value="<?php echo $lastName; ?>">
                </div>
                <div class="w-2/12 mt-4 inputrow">
                    <p>Telefoon</p>
                    <input type="text" name="phoneNumber" value="<?php echo $phonenumber; ?>">
                </div>
                <div class="w-2/12 mt-4 inputrow">
                    <p>Email</p>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="w-2/12 mt-4 inputrow">
                    <p>Wachtwoord</p>
                    <input type="password" name="passWord" value="<?php echo $password; ?>">
                </div>
                <div class="mt-4">
                    <p>
                        Selecteer de boot die u wil huren:
                    </p>
                    <select class="mb-4" name="bootSelect">
                        <?php 
                            while($boten = $boot-> fetch_assoc()){
                        ?>
                        <option value = "<?php echo $boten['id'];?>"><?php echo $boten['BoatName'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <p>
                        Selecteer een datum:
                    </p>
                    <input class="mb-4" type="datetime-local" name="DatumSelect">
                    <p>
                        Selecteer een dagdeel:
                    </p>
                    <select class="mb-4" name="dagdeelSelect">
                        <?php 
                            while($dagdelen = $dagdeel-> fetch_assoc()){
                        ?>
                        <option value="<?php echo $dagdelen['id'];?>"><?php echo $dagdelen['DayPart'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <button type="submit" class="knop" name="saveorder">
                        Bestellen
                    </button>
                </div>
            </form>
        </div>
>>>>>>> 42adab8e2c25114b5abc61bea2c1167685fba88d
    </div>
</body>
<?php 
    include('footer.php')
?>