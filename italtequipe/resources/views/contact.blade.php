<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo url('/assets/css/style-contact.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
  <title>IT Alternance</title>
</head>

<body>
  <div class="header">
    <img src="assets/images/logo_italt_aseul.png" class="logo" alt="log">
    <div class="header-right">
      <a class="active" a href="<?php echo url('/ecole') ?>">Écoles</a>
      <a class="active1" a href="<?php echo url('/candidat') ?>">Candidats</a>
      <a class="active2" a href="<?php echo url('/entreprise') ?>">Entreprises</a>
      <a class="active1" a href="<?php echo url('/contact') ?>">Contact</a>
      <a href="#"><i class="fa fa-user 7x"></i></a>
    </div>
  </div>
  <section>
    <!--Formulaire de contact -->
    <h2>Nous écrire</h2>
    <form method="POST" action="contact/store">
<!--question sur ce que mettre ds action-->
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
      <div class="button">
        <button type="submit">Envoyez votre Message</button>
      </div>
      @csrf <!--champ input hidden pour laravel = sécurité -->

      <!-- <div class="confirmation">
            ICI AVEC AJAX, ON AFFICHERA LE MESSAGE DE CONFIRMATION 
        </div>
        INFO TECHNIQUE POUR DIFFERENCIER LES FORMULAIRES 
        <input type="hidden" name="idFormulaire" value="contact">-->
    </form>
    <p>Nous répondrons dans un délai maximum de 4 jours</p>
  </section>
  <footer>
  <ul>
    <li> <a href="<?php echo url('/espace-admin') ?>">Admin</a> </li>
  </ul>
  </footer>
</body>

</html>