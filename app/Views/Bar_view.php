<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_bar.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_bar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            dialogGenerator('dialog')
        })
    </script>

    <title>Bar</title>
    
</head>

<body>
    <div id='bar'>
    <div id="enigme" class="enigmes">
        <h1>Quelle est ta réponse?</h1>
        <p id="indice">Petit rappel : <br> <br>Mon premier est un nombre mais aussi une boisson.<br> Mon second représente l’infini lorsque que tu le retournes. <br> Mon dernier est neutre. <br> Mon tout représente l’année dans laquelle on se trouve.</p>
        <h2>Réponse:</h2>
        <form method="POST" action="<?php echo base_url() ?>/Bar/validReponse"><p><input type="text" name="Numéro"><input type="submit" name="soumettre"></p></form>
    </div>
    
    

        <div id="dia">
            <div id="dialog" class="vignets">


            </div>

        </div>
        
    </div>
    <video id="vid" src="<?php echo base_url() ?>/assets/photos/cheval.webm" poster autoplay muted loop></video>

</body>

</html>