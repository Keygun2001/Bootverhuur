<?php 
    include('server.php');
    include("../config/database.php");
    include('header.php');
    include_once('../src/databaseFunctions.php');



  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="server.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="w-2/12 inputrow">
                                    <p>User id</p>
                                    <input type="text" name="uid" value="<?php echo $uid; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Ticket id</p>
                                    <input type="text" name="tid" value="<?php echo $tid; ?>">
                                </div>
                                <div class="w-2/12 mt-4 inputrow">
                                    <p>Hoeveelheid</p>
                                    <input type="text" name="amount" value="<?php echo $amount; ?>">
                                </div>
                                <div class="mt-4">
                                <?php if($update == true): ?>
                                    <button class="submitbutton" type="submit" name="updateorders">
                                        Update
                                    </button>
                                <?php else: ?>
                                    <button class="submitbutton" type="submit" name="saveorder">
                                        Save
                                    </button>
                                <?php endif ?>
                                </div>
                            </form>
</body>
</html>