

<section>
    <div id="accueil">


        <h1 id="pseudo-profile"> <?php echo $profil[0]['gamer_prenom'] ?> <?php echo $profil[0]['gamer_nom'] ?></h1>
        <!-- <img src="<?php echo base_url() ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo'] ?>"> -->

        <h2>Voici votre avancée</h2>
        

        <p>Chapitre : <?php echo $profil[0]['enigme_titre'] ?></p>

        <!-- <img src="<?php //echo base_url() ?>/assets/photos/enigmes/<?php //echo $profil[0]['enigme_photo'] ?>"> -->
       
        <img id="logo-profile" src=" <?php echo base_url() ?>/assets/photos/zaonomia.png " alt="">

       
    </div>
</section>