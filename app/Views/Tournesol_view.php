<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_tournesol.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_tournesol.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title>  </title>
    
</head>

<body>
    <div id='tournesol'>
        <video id="vid" width="1200vw" height="auto" src="<?php echo base_url() ?>/assets/photos/tournesol.webm" poster autoplay muted loop></video>
        <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets"> </div>

        </div>

        <div id="enigme">
        <p> Grâce aux informations du livre et aux indices retrouvés, quel est selon toi le métier de Monsieur Tournesol ? </p>
        <h2>Entrez le numéro de la bonne réponse:</h2>
        <div id="reponses">
        
            <div id="ours">
            <img width="250px" height="auto" src="<?php echo base_url() ?>/assets/photos/degours.png">
            
            <p> 1. L'ours </p>
        </div>
        <div id="chien">
        <img width="320px" height="auto" src="<?php echo base_url() ?>/assets/photos/degchien.png">
            <p> 2. Le chien </p>
            <form method="POST" action="<?php echo base_url() ?>/Tournesol/validReponse"><p id="valid"><input type="text" name="poule">
        <input type="submit" name="soumettre"></p></form>
        </div>
        <div id="poule">
        <img width="230px" height="auto" src="<?php echo base_url() ?>/assets/photos/degpoule.png">
            <p> 3. La poule </p>
        </div>
        
</div>
    </div>
</div>
        
    </div>


</body>

</html>