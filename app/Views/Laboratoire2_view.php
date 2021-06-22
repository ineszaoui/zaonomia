<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_laboratoire2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_laboratoire2.js"></script>
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
        <h1>Quelle est l'arme du crime ?</h1>
        <p id="indice">"L’arme du crime est la même que la précédente"</p>
        <h2>Réponse :<br> <img id="armes"src="<?php echo base_url() ?>/assets/photos/indice.png"></h2>
        <form method="POST" action="<?php echo base_url() ?>/Laboratoire2/validReponse"> <p> <input type="text" name="analyse"><input type="submit" name="soumettre"></p></form>
        
    </div>
    <img id ='tele_img' src="<?php echo base_url() ?>/assets/photos/tele.png">
    <img id ='vid' src="<?php echo base_url() ?>/assets/photos/lunettes_robot.png">
    <!-- <video id="vid" src="<?php echo base_url() ?>/assets/photos/cerveau.webm" poster autoplay muted loop></video>  -->
        <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>

</body>

</html>