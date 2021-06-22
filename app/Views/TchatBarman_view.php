<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_barman.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title> </title>

</head>

<body>

    <a id="ret" href="<?php echo base_url() ?>/Plan"><img src="<?php echo base_url() ?>/assets/photos/ar.png" width="50px"></a>
    <div id='tournesol'>
        <video id="vid" width="1200vw" height="auto" src="<?php echo base_url() ?>/assets/photos/cheval.webm" poster autoplay muted loop></video>
        <div id="devant"> </div>

        <div id="choix">
            <div >
                <p id="dialogue"></p>
            </div>
        </div>
    </div>


</body>

<script>
    $(document).ready(function(){
    $phrase1 = 'Je me demande bien ce que je vais manger en rentrant… des pâtes ou du riz ?'
    $phrase2='Il a fait beau toute la journée, c’est rare en ce moment…'
    $phrase3='Je me demande parfois si je ne devrais pas changer de travail…je passe tellement de temps derrière ce comptoir…'
    $phrase4='Il y a vraiment des choses étranges qui se passent dans cette ville…'
    $phrase5='J’hésite sur la couleur qui me va le mieux… rouge ou bleu ?'
    $phrase6='Mon plus grand rêve est de rencontrer Mariah Carey…'
    $phrase7='C’est l’anniversaire de ma fille aujourd’hui…les enfants grandissent si vite…'
    $phrase8='Ma boisson préférée est définitivement le mojito…'
    $phrase9='Ah tiens ! Ma pause est dans 5 minutes…'
    $phrase10='Les toilettes sont juste à côté au fond à droite…'
    $phrase11='Vous croyez que les fantômes existent ? Je suis sûr d’en avoir déjà croisé un…'


    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max))+1;
    }

    $alea = getRandomInt(11);
    console.log($alea);


    if ($alea == 1) {
        $('#dialogue').html($phrase1);
    } else if ($alea == 2) {
        $('#dialogue').html($phrase2);
    } else if ($alea == 3){
        $('#dialogue').html($phrase3);
    } else if ($alea == 4) {
        $('#dialogue').html($phrase4);
    } else if ($alea == 5) {
        $('#dialogue').html($phrase5);
    } else if ($alea == 6) {
        $('#dialogue').html($phrase6);
    } else if ($alea == 7) {
        $('#dialogue').html($phrase7);
    } else if ($alea == 8) {
        $('#dialogue').html($phrase8);
    } else if ($alea == 9) {
        $('#dialogue').html($phrase9);
    } else if ($alea == 10) {
        $('#dialogue').html($phrase10);
    } else if ($alea == 11) {
        $('#dialogue').html($phrase11);
    }
    })
</script>

</html>