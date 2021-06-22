<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_couloir.css">  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_couloir.js"></script>
</head>

<body>
    <a id="ret" href="<?php echo base_url() ?>/Plan"><img src="<?php echo base_url() ?>/assets/photos/ar.png" width="50px"></a>
    <div id="dialog">
        
    </div>
    <div>
        <?php
        $lieu = (int)$profil[0]['gamer_enigme_en_cours'];
        if ($lieu <= 1){
            echo '<style>#sc {display: none;}</style>';
            echo '<style>#bas1 {display: none;}</style>';
        }
        ?>
        <a id="sc" class="bi" href="<?php echo base_url() ?>/SceneCrime">Scène de crime</a>
    <a id="vo" class="bi" href="<?php echo base_url() ?>/Voisin">Voisin</a>
    </div>
    <div id="tout">
    <button id="bas1" class="bout"><</button>
    <button id="bas2" class="bout">></button>
    <div id="back"></div>
    
    

    </div>

</body>

</html>