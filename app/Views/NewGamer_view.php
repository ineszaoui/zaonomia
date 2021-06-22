<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
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
		<form method="POST" action="<?php echo base_url()?>/Gamer/Enregistrement">
				<h2>Inscription</h2>
				<input type="text" name="name" placeholder="Nom" required />
                <input type="text" name="fname" placeholder="Prénom" required />
				<br>
                <input type="email" name="email" placeholder="Adresse email" required />
                <input type="password" name="password" placeholder="Mot de passe" required />
                <input type="text" name="code" placeholder="Code Barre" required />

				<!-- <div class="wrap-input100 validate-input" data-validate="Please enter photo">
					<input class="input100" type="file" name="photo" placeholder="Photo" required>
					<span class="focus-input100"></span>
				</div> -->

				<button class="selector">Inscription</button>
				<br> <br>
				<p><a href="<?php echo base_url() ?>/Accueil">Retour à l'accueil</a></p>
        </form>
	</main>
</body>
</html>