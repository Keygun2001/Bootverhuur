<?php 
    session_start();
    include('server.php');
    include('header.php');
    include_once('../src/databaseFunctions.php');
    
    include_once('../src/userFunctions.php');
   
    $conn = db_connect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    //   echo "Connected successfully";
      $boot = db_getData('SELECT * FROM Boot');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css" />
    <title>Document</title>
   
</head>
<body>

<form method="post" action="server.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="w-2/12  inputrow">
                                    <p>Voornaam</p>
                                    <input type="text" name="firstName" value="<?php echo $uid; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Achternaam</p>
                                    <input type="text" name="lastName" value="<?php echo $tid; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Telefoon</p>
                                    <input type="text" name="phoneNumber" value="<?php echo $tid; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Email</p>
                                    <input type="text" name="email" value="<?php echo $amount; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Wachtwoord</p>
                                    <input type="text" name="passWord" value="<?php echo $amount; ?>">
                                </div>
                                <br>
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
                    <br>
                                <div class="mt-4">
                                <?php if($update == true): ?>
                                <br>
                                    <button class="submitbutton" type="submit" name="updateorders">
                                        Update
                                    </button>
                                <?php else: ?>
                                <br>
                                    <button class="submitbutton" type="submit" name="saveorder">
                                        Save
                                    </button>
                                <?php endif ?>
                                </div>
                            </form>
                        
</body>
</html>