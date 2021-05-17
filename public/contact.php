<?php 
    include('header.php');
?>
<body>
    <div class="my-16">
        <div class="container">
            <div class="w-full">
                <p>
                    Heeft u vragen over ons verhuur of ergens anders over? Laat het dan weten via het contactformulier hieronder.    
                </p>
                <form class="mt-4 w-10/12">
                    <div class="w-full flex">
                        <div class="w-1/2">
                            <p>
                                Voornaam:
                            </p>
                            <input class="w-full" type="text" />
                        </div>
                        <div class="mx-4"></div>
                        <div class="w-1/2">
                            <p>
                                Achternaam:
                            </p>
                            <input class="w-full" type="text" />
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <p>
                            Email:
                        </p>
                        <input type="email" class="w-full" />
                    </div>
                    <div class="w-full mt-4">
                        <p>
                            Uw bericht:
                        </p>
                        <textarea class="w-full"></textarea>
                    </div>
                    <div class="w-full flex justify-end mt-4">
                        <button class="knop" name="formulier">
                            Verzenden
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php 
    include('footer.php');
?>