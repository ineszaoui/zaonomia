<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_fin.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_fin.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>
    

    <title>  </title>
    
</head>

<body>
    <div id='fin'>
    <div id="enigme" class="enigmes">
        <h1>Il est temps de découvrir qui est le meurtrier !</h1>
        <p id="indice">Les indices ne sont plus nécessaire à ce stade de ton aventure.</p>
        <h2>Réponse: <br> <br>Nonie Mano - Edd Alorie - Echo Allumo - Raphaël Legrand</h2>
        <form method="POST" action="<?php echo base_url() ?>/Fin/validReponse"><p><input type="text" name="coupable"><input type="submit" name="soumettre"></p></form>
    </div>
    
        <div id="dia">
            <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>
<video id="vid" src="<?php echo base_url() ?>/assets/photos/cheval.webm" poster autoplay muted loop></video>
</body>

</html>