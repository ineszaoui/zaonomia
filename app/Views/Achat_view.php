<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style_achat.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>/assets/script_chien.js"></script> -->

    <title>Page d'achat</title>

</head>

<body>
<header id="bar">
        <nav>
        <a id="lien_nav" href="<?php echo base_url() ?>/">Accueil</a>
        <a id="lien_nav" href="http://mmi19g01.mmi-troyes.fr/tpwp3/">Agence Zaon</a>
    </nav>
</header>
<h1>Achat du livre Zaonomia</h1>
<div id='produit'>
<img id ='image_produit' src="<?php echo base_url() ?>/assets/photos/book2.png">
</div>
<div id="achat_produit">
    <h2>Livre Zaonomia</h2> 
    <br>
    <p>Ce livre vous permettra d'avancer dans le jeu Zaonomia, vous pourrez y retrouvez les indices pour résoudre les énigmes.</p>
    <p>C'est un peu le livre du plus grand détective pour un crime comme celui-ci.</p>
    <br>
    <p>Un livre indispensable pour résoudre les énigmes du fabuleux jeu Zaonomia ! </p>
    <p>Qu'attendez vous de plus ? Lancez vous à l'aventure !</p>
    <br>
    <p>Prix : 29,99 €</p> <img id="cb" src="<?php echo base_url() ?>/assets/photos/cb.png">
    <br>
    <a href="<?php echo base_url()?>/Achat_valide"> <button id="bout">Acheter</button></a>
</div>
<footer id="foot">
    <p>Copyright - ZAON </p>
</footer>
 

</body>

</html>