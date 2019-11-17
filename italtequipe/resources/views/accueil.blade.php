<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="description" content="Alternance pour le numérique" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo url('/assets/css/style-accueil.css') ?>">
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
            <h2>LE PREMIER PAS VERS<br>L'ALTERNANCE</h2>

    </header>



    
        <div class="title">
            <h3><span>Que pouvons nous faire pour vous ?</span></h3>
            <p>Cliquez sur la rubrique correspondant à votre profil pour découvrir ce que nous proposons</p>
        </div>



        <div id="imageBloc" style="text-align: center;">
            <button id="entreprise">Vous êtes une Entreprise</button>
            <button id="alternant">Vous êtes un Alternant</button>
            <button id="ecole">Vous êtes une École</button>

           <div class="alternant" style="display: block;"> 
             <!-- <img src="assets/images/fond-card-alternant.png" class="carte" alt=""> -->
             <p class='relative'><b>Prenez votre envol</b> <br><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                 labore et dolore magna aliqua. Ut enim ad minim veniam, 
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
             <a href="<?php echo url('/candidat') ?>"><button class="btn3">Commencer</button> </a> 
             </p>
              </div> 
            
            
              <div class="ecole" style="display: none;"> 
             <!-- <img src="assets/images/fond-card-ecole.png" class="carte" alt=""> -->
              <p class='relative'><b>Trouvez vos apprenants</b> <br><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                 labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
              <a href="<?php echo url('/ecole') ?>"><button class="btn4">Commencer</button> </a> 
              </p> 
              </div>

              <div class="entreprise" style="display:none;">  
              <!-- <img src="assets/images/fond-card-entreprise.png" class="carte" alt=""> -->
              <p class='relative'><b>Trouvez votre pépite</b> <br><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                 labore et dolore magna aliqua. Ut enim ad minim veniam, 
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
              <a href="<?php echo url('/entreprise') ?>"><button class="btn5">Commencer</button> </a> 
              </p> 
              </div>
           
            <div class="Qui">
                <img src="assets/images/qui.png" class=="qui1" alt="vecteur2">
                <div class="center">
                    <b>Qui sommes-nous ?</b>
                    <br><br>Nous sommes une équipe de développeuses web FullStack et nous avons pour ambition de rendre
                    plus facile l'accès à l'alternace dans le domaine du numérique. <br> C'est pourquoi la création de cette
                    plateforme qui regrouperait les 3 parties et leurs besoins (Alternants, Entreprises, Écoles)
                    , nous paraissait évidente.
                </div>
            </div>
        </div>



    <section id="contact">
        <h3 class="insta">Ils nous soutiennent </h3>
        <div class="figure-img1">
            <a href=""><img src="assets/images/logo-part/logo-simplon.png" alt="instapic3"></a>
            <a href=""><img src="assets/images/logo-part/logo-french-tech.png" alt="instapic2"></a>
            <a href=""><img src="assets/images/logo-part/logo-marseille.png" alt="instapic1"></a>
        </div>
        <div class="Quii">
            <img src="assets/images/orange.png" class="bandeorange" alt="vecteur2">
            <div class="center1">
                    <p class="action">Passez à l'action !</p>
                    <button class="btn2">S'inscrire</button>
                   </div>
               </div>
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