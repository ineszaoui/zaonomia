<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Erreur de Format</title>
	<meta charset="UTF-8">
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
      <h2>Erreur</h2>
      <p><?php echo $message ?><br><a href="<?php echo base_url() ?>/Gamer/NewGamer"><br>Retour</a></p>
      <p>Avez-vous achté le livre ?<br><a href="<?php echo base_url() ?>/Accueil" ><br>Retour à l'accueil</a></p>
	</form>			
</main>
</body>
</html>