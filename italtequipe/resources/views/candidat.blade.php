<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="description" content="Alternance pour le numérique" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-candidat.css') ?>">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
        <script src="<?php echo url('/assets/js/scrollreveal.min.js') ?>"></script>
        <title>IT ALTERNANCE au service du numérique</title>
</head>

<body>




    <nav>
        <div class="menu-icon">
           <a href="<?php echo url('/accueil') ?>"><img src="assets/images/logoa.png" class="logo2" alt="logo"></a> 
            <div class="burger">
            <span></span>

            </div>
        </div>

        <div class="menu">
            <ul>
                <img src="assets/images/logoa.png" class="logoa" alt="logo">
                <li><a class="active" a href="<?php echo url('/ecole') ?>">Écoles</a></li>
                <li><a class="active1" a href="<?php echo url('/candidat') ?>">Candidats</a></li>
                <li><a class="active2" a href="<?php echo url('/entreprise') ?>">Entreprises</a></li>
                <li><a class="active3" a href="<?php echo url('/contact') ?>">Contact</a></li>
                <li><a href="<?php echo url('/home') ?>"><i class="fa fa-user 7x" id="icon"></i></a></li>

            </ul>
        </div>

    </nav>

    <a id="myBtn" href="#accueil"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>




    <header id="accueil">
        <div class="overlay">
            <!-- <h1><span></span></h1> -->
            <img src="assets/images/logo_italt_sombre.png" a href="#accueil" class="logo1" alt="logo">
            <h2><br>ALTERNANT</h2>

    </header>



    
        <div class="title">
        <img src="assets/images/vecteur recherche.png" a href="#accueil" class="" alt="">
            <h3><span>Rechercher par catégories</span></h3>
            
        </div>







    <section id="contact">

    </section>


    <footer>
        <div class="footer-container">
            <a href="ml.html" target="_blank"></a>
            <a href="licence.html" target="_blank"></a>
           <!-- <p>Tous droits réservés - ©italt - 2019</p>-->

            <!-- <div class="blockContact1">
            <p class="blockContact">
                    Téléphone : +33 7 82 19 76 43
                    Email : <a href= "mailto:ITALT@gmail.com">Email</a>
                    Facebook : <a href="">Facebook</a>
                    Instagram : <a href="">Instagram</a>
                    </p> -->
        </div>
        </div>
    </footer>

    <script src="<?php echo url('/assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo url('/assets/js/sweetalert2.all.min.js') ?>"></script>
    <script src="<?php echo url('/assets/js/main.js') ?>"></script>
</body>

</html>