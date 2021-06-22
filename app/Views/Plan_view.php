<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAONOMIA</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/style_plan.css">
</head>
<body>
<div id="plan">
<nav id="nav-profile">
    <ul>
        <li> <a href="<?php echo base_url() ?>/Plan/AccueilGamer"> Profil </a> </li>
        <li class="dropbtn"> Énigme en cours : <?php echo $profil[0]['enigme_titre'] ?>
            <div class="dropdown-content">
               <p><?php echo $profil[0]['enigme_recap'] ?></p>
            </div></li>

        <li> <a href="<?php echo base_url() ?>/Gamer"> Deconnexion </a> </li>
    </ul>
</nav>

    <?php
    $lieu = (int)$profil[0]['gamer_enigme_en_cours'];

    if ( $lieu >= 1 && $lieu <= 9 ) {
        echo '<p id="coul"><a href="Couloir">Couloir</a></p>';
    }
    if ($lieu >= 2 && $lieu <= 9 ) {
        echo '<p id="labo"><a href="Laboratoire">Labo</a></p>';
        echo '<p id="bar"><a href="Barman">Bar</a></p>';
    }
    if ($lieu >= 4 && $lieu <= 9 ) {
        echo '<p id="bureau"><a href="Bureau">Le bureau</a></p>';
    }

    if ($lieu == 6 ) {
        echo '<p id="sus1"><a href="Tournesol">Suspect 1</a></p>';
    }
    if ($lieu == 7  ) {
        echo '<p id="sus2"><a href="Poule">Suspect 2</a></p>';
    }
    if ($lieu == 8  ) {
        echo '<p id="sus3"><a href="Chien">Suspect 3</a></p>';
    }
    if ($lieu == 9 ) {
        echo '<p id="sus4"><a href="Rat">Suspect 4</a></p>';
    }

    if ($lieu >= 10 && $lieu <= 11) {
        echo '<p id="bar"><a href="Bar">Bar</a></p>';
    }
    ?>



</div>


</body>
</html>