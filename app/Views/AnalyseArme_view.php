<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/AnalyseArme_style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/script_analyse.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/script_analyse_enigme.js"></script>
<script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

<title> Bureau </title>   
</head>
<body>




    <div id='bureau'>
    <video id="anim" src="<?php echo base_url() ?>/charaignee.webm" poster autoplay muted loop></video>
    <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>

    <div id="enigme" class="enigmes">
        <h1>4 éléments qui t’aideront à résoudre l’enquête se trouvent sur l’arme trouve les grâce aux différents outils proposés</h1>
      <p>Rentrez le code de l'outil ici : <br> <br>
      

      <input type="text" name="code-outils" id="code"></p>
      <div class="boutton"><button id="boutton" class="selector">Envoyer</button></div>


    <img id="hache" src="<?php echo base_url() ?>/assets/photos/hache.png" alt="">
        <div id="images-laterales">
        
        <img id="75821" class="indices" src="<?php echo base_url() ?>/assets/photos/indice_jaune.png" alt="">
        <img id="24685" class="indices" src="<?php echo base_url() ?>/assets/photos/indice_orange.png" alt="">
        <img id="53286" class="indices" src="<?php echo base_url() ?>/assets/photos/indice_griffe.png" alt="">
        <img id="45302" class="indices" src="<?php echo base_url() ?>/assets/photos/indice_feuille.png" alt="">

    </div>

   

    </div>
        <div id="dia">
            
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>
    


</body>

</html>    

</head>
<body>

    
</body>
</html>