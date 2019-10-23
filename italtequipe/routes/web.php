<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/', function () { //ici c'est une redirection directe sur la page candidat
    return redirect('/candidat'); // on la mettra en place quand on aura des entreprises déjà inscrites
});*/
Route::view('/', 'accueil');
Route::view('/candidat', 'candidat');
Route::view('/entreprise', 'entreprise');
Route::view('/ecole', 'ecole');
Route::view('/faq', 'faq');
Route::view('/contact', 'contact');
Route::view('/formulaire', 'formulaire');

// JE VAIS RAJOUTER LES PAGES espace-membre ET espace-admin
// SI DANS LE NAVIGATEUR, LE VISITEUR VA SUR L'URL 
// .../public/espace-membre
// LAVAREL VA AFFICHER LE CODE DE 
// resources/views/espace-membre.blade.php
Route::view('/espace-membre', 'espace-membre');
Route::view('/espace-admin', 'espace-admin');

Route::any('/contact/store', 'ContactController@store');
//Route::any('/annonce/store', 'AnnonceController@store');
//mais il me semble que je n'ai pas ce fichier ds Http/Controllers !!!

Auth::routes();
// CETTE LIGNE DE CODE CREE PLUSIEURS URLS DE ROUTE
// /register                => INSCRIPTION D'UN NOUVEL UTILISATEUR
// /login                   => UN VISITEUR PEUT S'IDENTIFIER
// /logout                  => UN MEMBRE PEUT SE DECONNECTER
// /password/reset          => UN MEMBRE PEUT DEMANDER A RETROUVER SON MOT DE PASSE

Route::get('/home', 'HomeController@index')->name('home');

// ON VA AJOUTER LA PAGE /annonces 
// QUI VA AFFICHER LA LISTE DES ANNONCES
// ON VA UTILISER LE TEMPLATE /resources/views/annonces.blade.php
Route::view('/annonces', 'annonces');
