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
            <img src="assets/images/logoa.png" a href="#accueil" class="logo2" alt="logo">
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



    <section id="a-propos">
        <div class="title">
            <h3><span>Que pouvons nous faire pour vous ?</span></h3>
            <p>Cliquez sur la rubrique correspondant à votre profil pour découvrir ce que nous proposons</p>
        </div>



        <div id="imageBloc" style="text-align: center;">
            <button id="entreprise">Vous êtes une Entreprise</button>
            <button id="alternant">Vous êtes un Alternant</button>
            <button id="ecole">Vous êtes une Ecole</button>

           <div class="alternant" style="display: block;"> 
            <ul class='absolut' >
             <li><img src="assets/images/fond-card-alternant.png" class="carte" alt=""></li> 
             </ul> 
             <p class='relative'> mmmmmmm mmmm mmmmmm mlmcopmwlc mcklk dklkjsd sdkjcs ldkjvksdjk <br> 
             <a href="<?php echo url('/candidat') ?>"><button> commencer </button> </a> 
             </p>
              </div> 
            
            
              <div class="ecole" style="display: none;"> 
              <ul class='absolut'> <li><img src="assets/images/fond-card-ecole.png" class="carte" alt=""></li> 
              </ul> 
              <p class='relative'> mmmmmmm mmmm mmmmmm mlmcopmwlc mcklk dklkjsd sdkjcs ldkjvksdjk <br> 
              <a href="<?php echo url('/ecole') ?>"><button> commencer </button> </a> 
              </p> 
              </div>

              <div class="entreprise" style="display:none;"> 
              <ul class='absolut'> 
              <li><img src="assets/images/fond-card-entreprise.png" class="carte" alt=""></li> 
              </ul> 
              <p class='relative'> mmmmmmm mmmm mmmmmm mlmcopmwlc mcklk dklkjsd sdkjcs ldkjvksdjk <br> 
              <a href="<?php echo url('/entreprise') ?>"><button> commencer </button> </a> 
              </p> 
              </div>
           
            <div class="Qui">
                <img src="assets/images/qui.png" class=="qui1" alt="vecteur2">
                <div class="center">
                    <b>Qui sommes-nous ?</b>
                    <br><br>Nous sommes une équipe de developpeuses web FullStack , qui ont pour ambition de rendre
                    plus facile l'accès à l'alternace dans le domaine du numérique. C'est pourquoi la création de cette
                    plateforme qui regrouperait les 3 parties et leurs besoins (Alternant,Entreprise,Ecole)
                    , nous paraissait évidente.
                </div>
            </div>
        </div>

    </section>

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
                    <ul class="b">
                            <a><li>Une question ? un problème?</li></a>
                            <a><li>FAQ</li></a>
                            <a><li>Nous contacter</li></a>
                          </ul>
                   

            </div>
        </div>
        
    </section>


    <footer>
        <div class="footer-container">

            <a href="ml.html" target="_blank"></a>
            <a href="licence.html" target="_blank"></a>
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