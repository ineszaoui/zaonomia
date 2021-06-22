<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>Connexion réussie</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style_bg.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style_form.css">

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
    <form method="POST" action="<?php echo base_url()?>/Gamer/Verification">
        <h2>Bienvenue !</h2>
        <p>Votre inscription est réussie !<br><a href="<?php echo base_url() ?>/Accueil#form"><br>Connexion</a></p>
	</form>			
    </main>
</body>
</html>