<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_disque.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_disque.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title></title>

</head>

<body>
   <div id="cont">
    <a id="ret" href="<?php echo base_url() ?>/Plan"><img src="<?php echo base_url() ?>/assets/photos/ar.png" width="50px"></a>
    <div class="disque">
    
        <form method="POST" action="<?php echo base_url() ?>/DisqueDur/validReponse">
            <p><input type="text" name="mdp"></p>
            <input type="submit" name="soumettre">
        </form>
    </div>
    <div id="dia">
            <div id='im' class="vignets"><img src="<?php echo base_url() ?>/assets/photos/renard.png" width="200px" height="260px" id="re" alt=""></div>
            <div id="dialog" class="vignets">

            </div>
    </div> 
  
   
</body>

</html>