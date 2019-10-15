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


/*Route::get('/', function () {
    return redirect('/candidat');
});*/
Route::view('/', 'accueil');
Route::view('/candidat', 'candidat');
Route::view('/entreprise', 'entreprise');
Route::view('/ecole', 'ecole');
Route::view('/faq', 'faq');
Route::view('/contact', 'contact');
Route::view('/formulaire', 'formulaire');