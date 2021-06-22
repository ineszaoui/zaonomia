<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_chien.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_chien.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title>Monsieur chien</title>
    
</head>

<body>
    <div id='chien'>
    <div id="enigme" class="enigmes">
        <h1>Quelle est la plaque d'immatriculation de Monsieur Chien ?</h1>
        <p id="indice">"elle commence par 143 et finit par la somme de mon jour, mon mois et mon année de naissance."</p>
        <h2>Réponse:<br> <img id="plaque"src="<?php echo base_url() ?>/assets/photos/plaque_d'immatricu.png"></h2>
        <form method="POST" action="<?php echo base_url() ?>/Chien/validReponse"> <p>(Écrivez le numéro de la plaque d'immatriculation qui vous semble bon)</p> <p> <input type="text" name="true_immatricu"><input type="submit" name="soumettre"></p></form>
        
    </div>
    <!--<img id ='chien_img' src="<?php echo base_url() ?>/assets/photos/chien.png"> -->
    <video id="vid" src="<?php echo base_url() ?>/assets/photos/chien.webm" poster autoplay muted loop></video> 
        <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>

</body>

</html>