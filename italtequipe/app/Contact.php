<?php

namespace App; // car on est ds le dossier app

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // propriété de l'objet
    protected $fillable = [ "nom", "email", "message"];
}
//Eloquent est un outil qui ns évite d'écrire les requêtes sql
// mais qui nous permet d'utiliser des fonctions php
//Contact.php est un Model (class php) qui représente une table 