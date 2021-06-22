<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_laboratoire.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_laboratoire.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title>Laboratoire</title>
    
</head>

<body>
    <div id='labo'>
    <div id="enigme" class="enigmes">
        <h1>Cherche les lunettes</h1>
        <p id="indice">" Pas d'indice "</p>

        
    </div>
    <img id ='tele_img' src="<?php echo base_url() ?>/assets/photos/tele.png">
    <video id="vid" src="<?php echo base_url() ?>/assets/photos/cerveau.webm" poster autoplay muted loop></video> 
    <a href="<?php echo base_url() ?>/Corps"> <img id ='enigme_img' src="<?php echo base_url() ?>/assets/photos/cadavre.png"></a>
        <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>

</body>

</html>