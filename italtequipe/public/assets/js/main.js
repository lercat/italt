
//------------------------ NAVBAR -----------------------
//-------------------------------------------------------
$(document).ready(function () {
	$('a[href^="#"]').on('click', function (evt) {
		var target = $(this).attr('href');
		$('html, body')
			.animate({
				scrollTop: $(target).offset().top
			}, 600);
	});

	$(".menu-icon").on("click", function () {
		$(".burger").toggleClass("active");
		$("nav ul").toggleClass("showing");
		$("nav").addClass("background-scroll");
	});

	$("nav a").on("click", function () {
		$(".burger").removeClass("active");
		$("nav ul").removeClass("showing");
	});
});

$(window).scroll(function () {
	if ($(window).scrollTop() > 1) {
		$('nav').addClass("background-scroll");
	} else {
		$('nav').removeClass("background-scroll");
		$("nav ul").removeClass("showing");
		$(".burger").removeClass("active");
	}
});

//------------------ Effet Parallax ----------------
//--------------------------------------------------
const parallax = document.querySelector("#accueil");

window.addEventListener('scroll', () => {
	setTimeout(moveBackground, 1)
});

function moveBackground() {
	parallax.style.backgroundPositionY = window.scrollY / 5 + "px";
}

//--------------- ScrollReveal ---------------------
//--------------------------------------------------
const sr = ScrollReveal();

sr.reveal('.logoa', {
	origin: 'top',
	distance: '200px',
	duration: 3000,
});

sr.reveal('.logo1', {
	origin: 'left',
	distance: '200px',
	duration: 5000,
});

sr.reveal('h2', {
	origin: 'right',
	distance: '200px',
	duration: 1500,
});

sr.reveal('.social-overlay', {
	origin: 'bottom',
	distance: '250px',
	duration: 1500,
});

sr.reveal('.scroll-overlay', {
	origin: 'top',
	distance: '200px',
	duration: 1500,
	delay: 800
});

sr.reveal('.picture', {
	origin: 'top',
	distance: '150px',
	duration: 2000,
	mobile: false
});

sr.reveal('figure', {
	duration: 3000,
	interval: 250,
	origin: 'bottom',
	distance: '50px',
});
sr.reveal('.figure-img1',{
	duration: 3000,
	interval: 250,
	origin: 'bottom',
	distance: '50px',
});
//------------------------ BOUTTON SCROLL TELEPHONE -----------------------
//-------------------------------------------------------


var mybutton = document.getElementById("myBtn");

// Quand l'utilisateur scroll down de 20px , montrer le boutton
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}





// //------------------------ CHANGEMENT CARTE AU CLIQUE -----------------------
// //-------------------------------------------------------


// CONTENUS
const ecole = document.querySelector(".ecole");
const alternant = document.querySelector(".alternant");
const entreprise = document.querySelector(".entreprise");
		
		
// BOUTONS
const boutonecole = document.querySelector("#ecole");
const boutonentreprise = document.querySelector("#entreprise");
const boutonalternant = document.querySelector("#alternant");
        
		
		

        boutonecole.addEventListener("click",(event)=>{
			ecole.style.display="block";
			alternant.style.display="none";
			entreprise.style.display="none";
		 
        });


        boutonalternant.addEventListener("click",(event)=>{
			alternant.style.display="block";
			ecole.style.display="none";
			entreprise.style.display="none";
		
		});
		

        boutonentreprise.addEventListener("click",(event)=>{
			entreprise.style.display="block";
			alternant.style.display="none";
			ecole.style.display="none";
        });



