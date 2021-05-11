<?php 
    include('server.php');
    include('header.php');

    $conn = db_connect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $boot = db_getData("SELECT * FROM Boot");
    $dagdeel = db_getData("SELECT * FROM Dagdeel")
    
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boot bestellen</title>
        <link rel="stylesheet" href="../Styles/style.css" />
    </head>
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
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="w-2/12 mt-4 inputrow">
                    <p>Wachtwoord</p>
                    <input type="text" name="passWord" value="<?php echo $password; ?>">
                </div>
                <div class="flex mt-4">
                    <select name="bootSelect">
                        <?php 
                            while($boten = $boot-> fetch_assoc()){
                        ?>
                        <option value = "<?php echo $boten['id'];?>"><?php echo $boten['BoatName'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <select name="dagdeelSelect">
                        <?php 
                            while($dagdelen = $dagdeel-> fetch_assoc()){
                        ?>
                        <option value="<?php echo $dagdelen['id'];?>"><?php echo $dagdelen['DayPart'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mt-4">
                    <button type="submit" name="saveorder">
                        Bestellen
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>