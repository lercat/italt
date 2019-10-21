<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>admin</title>
</head>

<body>
<!-- TOUTE MA PAGE SERA GEREE AVEC VUEJS -->
    <div id="app">
        <header>
            <h1>ESPACE ADMIN</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo url('/') ?>">Accueil</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>

            <?php
                $coucou = "beurk";
            ?>
            <h3>AVEC BLADE/LARAVEL: {{ $coucou }}</h3>
            </section>

            <section>
                <h3>CRUD SUR LA TABLE SQL contacts</h3>
                <h3>CREATE SUR LA TABLE SQL contacts</h3>
                    <!-- CONVENTION LARAVEL POUR LE CREATE action="contact(s)/store" -->
                    <form method="POST" action="contact/store">
                    <div>    
                        <label>
                            <span>Votre Nom</span>
                            <input type="text" name="nom" required placeholder="Entrez votre nom">
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>Votre Email</span>
                            <input type="email" name="email" required placeholder="Entrez votre email">
                        </label>
                    </div>
                    <div>
                        <label>
                            <span>Votre Message</span>
                            <textarea name="message" cols="52" rows="5" required placeholder="Entrez votre message"></textarea>
                        </label>
                    </div>

                    <button type="submit">PUBLIER UNE MESSAGE</button>
                    <!-- RACCOURCI BLADE POUR AJOUTER UN CHAMP HIDDEN -->
                    @csrf
                    </form>

                    <h3>READ SUR LA TABLE SQL contacts</h3>
                    <h3>DANS CHAQUE ANNONCE ON AURA UN UPDATE ET UN DELETE</h3>
                </section>
        </main>

    </div><!--fin id app-->

<!-- on charge le code de vuejs -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- et ensuite je peux ajouter mon code js -->
<script>
// ON GARDE LE CODE DANS LE HTML
// ET ENSUITE ON LE DEPLACERA DANS UN FICHIER A PART
var app = new Vue({
    el: '#app', // vuejs va gérer toute la balise div#app
    data: {
        // ici on va rajouter nos variables gérées par vuejs
        coucou: 'le texte donné avec VueJS',
        message: 'Hello Vue!'
    }
})
</script>
</body>

</html>