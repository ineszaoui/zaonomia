<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_poule.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_poule.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>
    

    <title>  </title>
    
</head>

<body>
    <div id='poule'>
    <div id="enigme" class="enigmes">
        <h1>Quelle est la taille de Madame La Poule?</h1>
        <p id="indice">"Je suis plus petite que le produit de mon âge et du nombre de cadavres retrouvés."</p>
        <h2>Réponse:</h2>
        <form method="POST" action="<?php echo base_url() ?>/Poule/validReponse"><p><input type="text" name="metre"><p>   m    </p><input type="text" name="centi"><input type="submit" name="soumettre"></p></form>
    </div>
    <video id="vid" src="<?php echo base_url() ?>/assets/photos/pouler.webm" poster autoplay muted loop></video>
        <div id="dia">
            <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>

</body>

</html>