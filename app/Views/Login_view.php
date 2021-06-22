<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Back-Office</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style_form.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style_bg.css">
</head>

<body class="body">
<main>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
        <form method="POST" action="<?php echo base_url()?>/Gestion/Verification">
	        <h2>Accès à la page d'administration</h2>
            <span><input type="text" name="username" placeholder="Pseudo Administrateur"></span>
            <br>
            <span><input type="password" name="password" placeholder="Mot de Passe"></span>

            <button class="selector">Se connecter</button>

            <p><a href="<?php echo base_url() ?>/Accueil">Retour à l'accueil</a></p>
        </form>
</main>
</body>
</html>