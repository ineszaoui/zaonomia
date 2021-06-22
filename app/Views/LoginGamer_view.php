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

    <section>
        <div id="accueil">
            <h1>Bienvenue à Zaonomia</h1>
            <p>Découvrez cette ville futuriste, dans lequels bêtes fantastiques et humains cohabitent. En tant qu’enquêteur, vous avez une affaire à résoudre : vous traquez un tueur en série et il a encore commis un meurtre. Va sur les lieux du crime, trouve les indices nécessaires pour résoudre l’affaire, parle aux suspects pour en innocenter certains et trouve le meurtrier. Tu devras résoudre des énigmes tout au long de l’aventure. Celles-ci te permettront de trouver de nouveaux indices sur qui est le meurtrier.</p>

            <p>Déplace-toi dans les différents bâtiments sur la carte pour interagir avec autres personnages, lieux les plus utiles :</p>

            <p>Le laboratoire – le médecin légiste saura t’informer sur la raison de la mort de la victime et analysera les indices trouvés.
                <br>Le bureau – tu pourras interagir avec les objets récupérés sur la scène de crime.
                <br>Le bar – un endroit plutôt sympa où tu aimes réfléchir sur les informations trouvées jusque-là.</p>


            <p>Auras-tu le courage de faire face au futur dans cette ville ? Alors connecte toi !</p>
        </div>
    </section>
    <button id="bout"><a href="<?php echo base_url() ?>/Achat">Acheter le livre</a></button>
        <form id="form" method="POST" action="<?php echo base_url()?>/Gamer/Verification">
            <h2>Connexion</h2>

            <input type="text" name="email" placeholder="Adresse email">
            <br>
            <input type="password" name="password" placeholder="Mot de Passe">

            <button class="selector">Connexion</button>

            <p>Pas de compte ?<br> <a id="a_form" href="<?php echo base_url() ?>/Gamer/NewGamer" >S'inscrire</a></p>
        </form>

</main>
