<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // propriété de l'objet
    protected $fillable = [ "nom", "email", "message"];
}
