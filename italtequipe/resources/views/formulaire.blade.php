<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('/assets/css/style-accueil.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
    <title>IT Alternance</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo url('/') ?>"> <img src="assets/images/logoa.png" alt="logoa"></a></li>
                <li><a href="<?php echo url('/candidat') ?>">Candidat</a></li>
                <li><a href="<?php echo url('/entreprise') ?>">Entreprise</a></li>
                <li><a href="<?php echo url('/ecole') ?>">École</a></li>
                <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                <li><i class="fas fa-user"></i></li>
            </ul>
        </nav>

        <img src="background ???" alt="">
        <img src="assets/images/logo_italt_sombre.png" alt="logo">
        <h1>Le premier pas vers l'alternance</h1>
    </header>
    <main>
        <section>
            <h2>inscription</h2>
            Vous êtes :<br />
            <select name="profil">
                <option value="candidat">Un(e) candidat(e)</option>
                <option value="entreprise">Une Entreprise</option>
                <option value="ecole">Une école</option>
            </select><!--j'ai mis une liste mais peut être case à cocher qui redirige vers ...-->
            <!-- Users //////////////////////////////////////////////// -->
            <fieldset>
                <legend>Users</legend>
                <p><label for="user_name">Entrez votre nom d'utilisateur :</label>
                    <input type="text" name="user_name" id="user_name" required size="30" autofocus="" /></p>

                <p><label for="mdp">Entrez votre mot de passe :</label>
                    <input type="password" name="mdp" id="mdp" size="30" required autofocus="" /></p>

                <p><label for="rmdp">Répétez votre mot de passe :</label>
                    <input type="password" name="rmdp" id="rmdp" size="30" required autofocus="" /></p>

                <p><label for="email">Saisissez votre adresse email : </label>
                    <input type="email" name="email" id="email" /></p>

                <p><label for="remail">Répétez votre adresse email : </label>
                    <input type="email" name="remail" id="remail" /></p>
            </fieldset>

            <!-- Candidtate //////////////////////////////////////////////// -->
            <fieldset>
                <legend>Candidat(e)</legend>
                <p><label for="nom">Entrez votre nom :</label>
                    <input type="text" name="nom" id="nom" size="30" required autofocus="" /></p>

                <p><label for="prenom">Entrez votre prénom :</label>
                    <input type="text" name="prenom" id="prenom" size="30" required autofocus="" /></p>
            </fieldset>
            <!-- Entreprise //////////////////////////////////////////////// -->

            <fieldset>
                <legend>Nom de l'entreprise</legend>
                <p><label for="rs_ent">Raison Sociale</label>
                    <input type="text" name="rs_ent" id="rs_ent" size="30" required autofocus="" /></p>
                <p><label for="siret_ent">N° SIRET/SIREN</label>
                    <input type="text" name="siret_ent" id="siret_ent" size="30" required autofocus="" /></p>
                <p>
                    Quelle activité ?
                    <select name="activites" id="activites" required>
                        <option value="internet">Internet</option>
                        <option value="bigdata">Big Data</option>
                        <option value="informatique">Informatique</option>
                        <option value="jeuxvideo">Jeux vidéo</option>
                        <option value="ia">Intelligence artificielle</option>
                    </select>
                </p>
                <p><label for="url_ent">Saisissez le nom de votre site : </label>
                    <input type="url" name="url_ent" id="url_ent" placeholder="https://" size="55" /></p>
                <p><label for="name_pac">Nom de la personne à contacter :</label>
                    <input type="text" name="name_pac" id="name_pac" size="30" autofocus="" /></p>
                <p><label for="email_pac">Email de la personne à contacter : </label>
                    <input type="email_pac" name="email_pac" id="email_pac" required /></p>
            </fieldset>
            <!-- Formation //////////////////////////////////////////////// -->
            <fieldset>
                <legend>Nom de l'organisme de formation</legend>
                <p><label for="rs_for">Raison Sociale</label>
                    <input type="text" name="rs_for" id="rs_for" size="30" required autofocus="" /></p>
                <p><label for="siret_for">N° SIRET/SIREN</label>
                    <input type="text" name="siret_for" id="siret_for" size="30" required autofocus="" /></p>
                <p><label for="agrement">N° d'agrément</label>
                    <input type="text" name="agrement" id="agrement" size="30" required autofocus="" /></p>
                <p><label for="url_for">Saisissez le nom de votre site : </label>
                    <input type="url" name="url_for" id="url_for" placeholder="https://" size="55" /></p>

                Quelle formation proposez-vous ?
                <select name="formations" id="formations">
                    <option value="dev_web">Développement Web</option>
                    <option value="reseau">Réseaux</option>
                    <option value="concepteur">Concepteur</option>
                    <option value="graphiste">Graphiste</option>
                    <option value="designer">Designer</option>
                    <option value="full_stack">Full Stack</option>
                    <option value="front_end">Front End</option>
                    <option value="back_end">Back End</option>
                </select>

                <p><label for="name_pac">Nom de la personne à contacter :</label>
                    <input type="text" name="name_pac" id="name_pac" size="30" autofocus="" /></p>
                <p><label for="email_pac">Email de la personne à contacter : </label>
                    <input type="email_pac" name="email_pac" id="email_pac" required /></p>
            </fieldset>

            <!-- pour tout le monde //////////////////////////////////////////////// -->
            <!-- peut être des éléments à déplacer des autres fieldset sur celui-ci ???-->
            <fieldset>
                <legend>En commun pour tous</legend>
                <p><label for="adresse">Entrez votre adresse :</label>
                    <input type="text" name="adr" id="adr" size="30" required autofocus="" /></p>

                <p><label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" size="30" required autofocus="" /></p>

                <p><label for="cp">Code Postal :</label>
                    <input type="text" name="cp" id="cp" size="30" required autofocus="" /></p>

                <p><label for="tel">Téléphone : </label>
                    <input type="tel" name="tel" id="tel" maxlength="17"></p>
            </fieldset>


            <!-- est-ce qu'on met ça ici ??? //////////////////////////////////////////////// -->

            <p>condition générale case à cocher accepter les cg ???</p>
            <p>prouvez que vous êtes un humain ???</p>
            <p>Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par italt.com pour le recensement des demandes d’informations.
            Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d’accès aux données vous concernant et les faire rectifier en contactant : Simplon.co – 55 Rue de Vincennes – 93 100 Montreuil</p>

    </main>

    <footer>
    </footer>

</body>

</html>