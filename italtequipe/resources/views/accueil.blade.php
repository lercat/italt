<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Alternance pour le numérique" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('/assets/css/style-accueil.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <script src="assets/js/scrollreveal.min.js"></script>
    <title>IT ALTERNANCE au service du numérique</title>
</head>
<body>
       
    


    <nav>
        <div class="menu-icon">
                <img src="assets/images/logoa.png" a href="#accueil" class="logo2" alt="logo" > 
            <div class="burger">
                     
                   
                <span></span>
            </div>
        </div>

        <div class="menu">
            <ul>
                    <img src="assets/images/logoa.png" class="logoa" alt="logo"> 
                     <li><a class="active"  a href="<?php echo url('/ecole') ?>">Écoles</a></li>
                     <li><a class="active1" a href="<?php echo url('/candidat') ?>">Candidats</a></li>
                     <li><a class="active2" a href="<?php echo url('/entreprise') ?>">Entreprises</a></li>
                    <li><a class="active3"  a href="<?php echo url('/contact') ?>">Contact</a></li>
                     <li><a href="#"><i class="fa fa-user 7x" ></i></a></li>
                     
         </ul>
         </div>
       
    </nav>
      
      <a id="myBtn" href="#accueil"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    


      
    <header id="accueil">
        <div class="overlay">
          <!-- <h1><span></span></h1> -->
         <img src="assets/images/logo_italt_sombre.png" a href="#accueil" class="logo1" alt="logo">
         <h2>LE PREMIER PAS VERS<br>L'ALTERNANCE</h2>

            <div class="scroll-overlay">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    
    
    <section id="a-propos">
        <div class="title">
             <h3><span>Que pouvons nous faire pour vous ?</span></h3>
            <p>Cliquez sur la rubrique correspondant à votre profil<br>pour découvrir ce que nous proposons</p> 
        </div>


            
            <ul class="nav1">
            <img src="" alt="Images" id="imageReplace"/><br />
           <a href="#a-propos" onclick="changeImage('assets/images/fond-card-entreprise.png');">Vous êtes une Entreprise</a>
           <a href="#a-propos" onclick="changeImage('assets/images/fond-card-alternant.png');">Vous êtes un Candidat</a>
         <a href="#a-propos" onclick="changeImage('assets/images/fond-card-ecole.png');">Vous êtes une École</a>
        </ul>
           
    </section>

    <section id="portfolio">
            <div class="Qui">
                     
                    <img src="assets/images/qui.png" class=="naz" alt="vecteur2" width="1250" height="500">
                            
                                <div class="center"></div>
                                Qui sommes-nous ?
                        <br>Nous sommes une équipe de developpeuses web FullStack , qui ont pour ambition de rendre 
                        plus facile l'accès à l'alternace dans le domaine du numérique.C'est pourquoi la création de cette plateforme qui regrouperait les 3 parties et leurs besoins (Alternant,Entreprise,Ecole)
                         , nous paraissait évidente.
                            </div>
                     </div>
                  </div>

        <!-- <div class="portfolio-container">
           
            <figure>
                <div class="figure-img">
                    <!-- <img src="img/qui.png" alt="vecteur1"> -->
                <!-- </div>
                <figcaption>
                    <div class="figcaption-details">
                       <!-- <h4></h4> -->
                        <p></p>
                    </div>
                </figcaption>
            </figure>
        </div> 
         </section>

    <section id="contact"> 
            <h3 class="insta">Ils nous soutiennent </h3>
              <div class="figure-img1">
               <a href=""><img src="assets/images/logo-part/logo-marseille.png" alt="instapic1"></a>
               <a href=""><img src="assets/images/logo-part/logo-french-tech.png" alt="instapic2"></a>
               <a href=""><img src="assets/images/logo-part/logo-simplon.png" alt="instapic3"></a>
              </div>
            
    </section>

   
            <img src="assets/images/orange.png" alt="" width="1000" height="100"></div>   


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
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo url('/assets/js/main.js') ?>"></script>
    
</body>
</html>
