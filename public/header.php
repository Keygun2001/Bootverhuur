<?php 
    include('../config/config.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo CSS_FOLDER ?>" />
    </head>
    <body>
        <div class="bg-purple-800 h-16">
            <div class="headercontainer">
                <div class="flex">
                    <h2 class="logo w-6/12 mt-2">
                        <a class="text-white" href="index.php">
                            Bootverhuur KDC
                        </a>
                    </h2>
                    <div class="flex w-full justify-end">
                        <nav>
                            <ul class="flex space-x-4 mt-8">
                                <li>
                                    <a class="link text-white" href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="link text-white" href="order.php">
                                        Bestellen
                                    </a>
                                </li>
                                <li>
                                    <a class="link text-white" href="contact.php">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

?>