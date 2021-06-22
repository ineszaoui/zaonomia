<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_cadavre.css">
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
        
    </div>

    <!-- <a href="<?php echo base_url() ?>/Laboratoire2"> <img id="enigme_img"src="<?php echo base_url() ?>/assets/photos/lunette.png"> </a> -->
    <a href="<?php echo base_url() ?>/Laboratoire2"> <img id ='enigme_img' src="<?php echo base_url() ?>/assets/photos/lunette.png"></a>
    <img id ='organe_img' src="<?php echo base_url() ?>/assets/photos/organe2.png"> 

        </div>
        
    </div>

</body>

</html>