<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url('/assets/css/style-main.css') ?>">
    <title>It Alt</title>
</head>

<body>
    <header>
        <nav>
            <a href='#'><img class='logo' src="assets/images/logo.png" alt="logo"> </a>
            <ul id="menu">
                <li><a href="<?php echo url('/faq') ?>">FAQ</a></li>
                <li><a href="<?php echo url('/contact') ?>">Contact</a></li>
                <li><a href="#"><img src="assets/images/user.jpg" alt="connection"></a></li>
            </ul>
        </nav>
        <div class="header">
            <ul>
                <li><a href="<?php echo url('/candidat') ?>">Candidat</a></li>
                <li><a href="<?php echo url('/entreprise') ?>">Entreprise</a></li>
                <li><a href="<?php echo url('/ecole') ?>"> École</a></li>
            </ul>
            <img src="assets/images/image1.png" alt="image">
        </div>




        <h1>Notre slogan</h1>
    </header>
    <main>
        <section>
            <h3>Qui sommes nous</h3>
            <p>
                It-Alt est un site dédié à l'alternance pour des candidats en recherche d'entreprises
                et/ou d'organismes de formation. <br>
                Cela permettra à des entreprises de poster des offres et de consulter des cv : liens sur les candidats
                et leurs travaux qu'ils auront réalisés. <br>
                Les organismes de formation pourront indiquer les programmes des sessions qu'ils proposent ainsi que tous les
                renseignements necessaires. Ils auront un accès à la cvthèque.
            </p>
        </section>
        
        <section>
            <h3>Notre équipe </h3>
            <p>
                Quatre apprenantes en formation, dont certaines veulent partir en alternance
                pour compléter leur savoir-faire en développement web.<br>
                Nous comptons sur tout le monde pour que ce site émerge et devienne réalité !!!
            </p>
            <div class="container">
                <h3 class="title">L'intello</h3>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="assets/images/01-yasmina.jpg" alt="photo de Yasmina">
                        <div class="content-details fadeIn-top fadeIn-left">
                            <h3>Yasmina MIMART</h3>
                            <p>Recherche un poste de développeuse web</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container">
                <h3 class="title">L'exigeante</h3>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="assets/images/02-tania.jpg">
                        <div class="content-details fadeIn-top fadeIn-right">
                            <h3>Tania JUSPIN</h3>
                            <p>Recherche un poste en ??? Supère développeuse</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container">
                <h3 class="title">L'espiègle</h3>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="assets/images/03-fazia.jpg">
                        <div class="content-details fadeIn-bottom fadeIn-left">
                            <h3>Fazia BOUHERAOUA</h3>
                            <p>Recherche une alternance ou une entreprise qui adore le copier-coller :)</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container">
                <h3 class="title">Le à vous de me dire</h3>
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="assets/images/04-cathy.jpg">
                        <div class="content-details fadeIn-bottom fadeIn-right">
                            <h3>Catherine LE ROY</h3>
                            <p>Recherche une entreprise pour une alternance</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        

        <section class="soutien">
            <h3>Ils nous soutiennent</h3>
            <img src="assets/images/logo-french-tech.png" alt="French Tech">
            <img src="assets/images/logo-simplon.png" alt="simplon">
            <img src="assets/images/logo-marseille.png" alt="marseille">


        </section>
    </main>
    <footer>

        <a href="cgv.pdf">
            <h4 id="papiers">Conditions Générales d'Utilisation</h4>
        </a>
        <a href="ML.pdf">
            <h4 id="papiers">Mentions Légales</h4>
        </a>
        <h4>Suivez-nous </h4>
        <a href="#"><img src="https://img.icons8.com/color/50/4a90e2/facebook-new.png" alt="Facebook"> </a>
        <a href="#"><img src="https://img.icons8.com/color/50/4a90e2/twitter-circled.png" alt="Twitter"> </a>
        <a href="#"><img src="https://img.icons8.com/color/50/4a90e2/linkedin-circled.png" alt="Linkedin"> </a>

        <p>Tous droits réservés @IT-ALT 2019</p>
    </footer>


    <script src="<?php echo url('/assets/js/main.js') ?>"></script>

</body>

</html>