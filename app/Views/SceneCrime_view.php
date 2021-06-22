<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_scrime.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_scenecrime.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title>Scène de crime</title>

</head>

<body>
<div id='scrime'>
    <div id="enigme" class="enigmes">
        <img id="batte" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/batte.png">
        <img id="pistolet" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/pistolet.png">
        <!--<img id="coussin" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/coussin.png">-->
        <img id="disque" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/disque.png">
        <img id="hache" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/hache.png">
        <img id="poison" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/poison.png">
        <img id="sang" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/sang.png">
        <img id="fleurs" class="draggable" src="<?php echo base_url() ?>/assets/photos/scenecrime/fleurs.png">
        <!--<h1>Quelle est la plaque d'immatriculation de Monsieur Chien ?</h1>
        <p id="indice">"elle commence par 143 et finit par la somme de mon jour, mon mois et mon année de naissance."</p>
        <h2>Réponse:<br> <img id="plaque"src="<?php echo base_url() ?>/assets/photos/plaque_d'immatricu.png"></h2>
        <form method="POST" action="<?php echo base_url() ?>/SceneCrime/validReponse"> <p>(Écrivez le numéro de la plaque d'immatriculation qui vous semble bon)</p> <p> <input type="text" name="true_immatricu"><input type="submit" name="soumettre"></p></form>-->

    </div>
    <div id="enigme2" class="enigmes2">
        <h1>Combien d'indices avez-vous récupéré ?</h1>
        <p id="indice"></p>
        <h2>Réponse:<br></h2>
        <form method="POST" action="<?php echo base_url() ?>/SceneCrime/validReponse"><p> <input type="text" name="nb_ind"><input type="submit" name="soumettre"></p></form>
    </div>
    <!--<img id ='chien_img' src="<?php echo base_url() ?>/assets/photos/chien.png"> -->
    <!--<video id="vid" src="<?php echo base_url() ?>/assets/photos/chien.webm" poster autoplay muted loop></video>-->
    <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
        <div id="dialog" class="vignets">

        </div>

    </div>

</div>


<script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
<script>
    $("#batte").click(function(){
        $("#batte").hide();
        test()
    });
    $("#poison").click(function(){
        $("#poison").hide();
        test()
    });
    $("#pistolet").click(function(){
        $("#pistolet").hide();
        test()
    });
    $("#hache").click(function(){
        $("#hache").hide();
        test()
    });
    $("#sang").click(function(){
        $("#sang").hide();
        test()
    });
    $("#disque").click(function(){
        $("#disque").hide();
        test()
    });
    function test() {
        if(document.getElementById('batte').style.display == 'none' && document.getElementById('poison').style.display == 'none' && document.getElementById('pistolet').style.display == 'none'
            && document.getElementById('hache').style.display == 'none' && document.getElementById('sang').style.display == 'none' && document.getElementById('disque').style.display == 'none'){
            document.getElementById("enigme2").style.display = "block";
            document.getElementById("enigme").style.display = "none";
            console.log ("ok")
        }
    }
</script>
</body>

</html>