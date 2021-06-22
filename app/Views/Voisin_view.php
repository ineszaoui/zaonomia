<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_voisin.css">  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_voisin.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>
</head>

<body>
    <div id="cont">
        <video id="vid" height="140%" src="<?php echo base_url() ?>/assets/photos/plante.webm" poster autoplay muted loop></video>
        <a id="ret" href="<?php echo base_url() ?>/Couloir"><img src="<?php echo base_url() ?>/assets/photos/ar.png" width="50px"></a>
        <div id="dialog" class="vignets">
            
        </div>
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
    </div>
    


</body>

</html>