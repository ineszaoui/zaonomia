
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_laboratoire2.css">
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_laboratoire2_reponse.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

</head>

<body>
    <div id='labo'>
    <div class="enigmes_reponse">
        <div>
            <h1><?php echo $message ?></h1>
            <p><a href="<?php echo base_url()?>/Plan" class="bout"><?php echo $bouton ?></a></p>
        </div>
    </div>

    <div id="dia">
        <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>

        </div>
        
    </div>

</body>

</html>

