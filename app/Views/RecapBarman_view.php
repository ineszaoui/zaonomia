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
<a id="ret" href="<?php echo base_url() ?>/Barman"><img src="<?php echo base_url() ?>/assets/photos/ar.png" width="50px"></a>
    <div id='tournesol'>
        <video id="vid" width="1200vw" height="auto" src="<?php echo base_url() ?>/assets/photos/cheval.webm" poster autoplay muted loop></video>
        <div id="devant"> </div>

        <div id="choix">
            <div>
                <p id="dialogue">
                    <?php $lieu = (int)$profil[0]['gamer_enigme_en_cours'];
                    if ( $lieu == 1 ) {
                        echo 'Pas d\'énigme résolue pour le moment.' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 2 ) {
                        echo 'Avec l\'analyse de la scène de crime, tu peux maintenant analyser les objets trouvés. ' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 3 ) {
                        echo 'La victime est un homme. Il doit avoir environ 30 ans et il a été assassiné mardi matin, entre 10h et 12h. L’arme du crime est la même que la précédente, le meurtrier mesure moins d’1 mètre 20.' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 4 ) {
                        echo ' L\'arme de crime est une hache. ' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 5 ) {
                        echo 'Il y a 4 indices sur l\'arme du crime, une feuille de tulipe, une plume synthétique, des tâches de jus d\'herbe et une griffe de chien, ou de rat peut être.' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 6 ) {
                        echo ' Le disque dur contient des mails d’annulation de vente d\'appartement. Les deux personnes semblent être de la même famille. ' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 7 ) {
                        echo 'Le Tournesol porte un costume de mascotte de poule lorsqu\'il travaille, d\'ailleurs il travaillait mardi à 10h.' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 8 ) {
                        echo ' La poule mesure 1m30. ' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 9 ) {
                        echo 'Le chien possède une voiture vollante, son numéro de plaque est le 1432082. Le voisin nous a prévenu que la plaque du tueur commence par 143 et possède un 2 et un 5 dans le reste de la plaque.' ;
                        echo '<br>';
                    }
                    if ( $lieu >= 10 ) {
                        echo ' Le nom du rat est en réalité un anagramme, il ne s\'appelle pas Monsieur Legrand mais Monsieur Dangler, le même nom que celui de la victime.';
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>


</body>

<!--<script>
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
</script>-->

</html>