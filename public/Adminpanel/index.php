<?php 
    include("../../config/config.php")
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootverhuur KDC Adminpanel</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo CSS2_FOLDER ?>" />
    </head>
    <body>
        <div class="container">
            <div class="h-full flex justify-center items-center">
                <div class="py-8 px-4 w-4/12 rounded border-2 border-black">
                    <h2 class="logo flex justify-center">
                        Inloggen
                    </h2>
                    <form class="mt-4">
                        <div>
                            <p>
                                Emailadres:
                            </p>
                            <input type="email" class="mt-2 w-full border-2 border-black rounded" />
                        </div>
                        <div class="mt-4">
                            <p>
                                Wachtwoord:
                            </p>
                            <input type="password" class="mt-2 w-full border-2 border-black rounded" />
                        </div>
                        <div class="mt-4 flex justify-end">
                            <button type="submit" class="knop">
                                Inloggen
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>