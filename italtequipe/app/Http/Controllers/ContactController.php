<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

// on ajoute cette ligne pour pouvoir utiliser la validation

use Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // READ Liste
        // pour obtenir la liste des contacts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // la methode qui devrait créer le formulaie de CREATE
        // ns n'utilisons pas ce moyen
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ici on traite le formulaire de CREATE

        // on renvoie du format JSON
        // en PHP on utilise un tab associatif
        $tabAssoJson = [];
        $tabAssoJson["test"] = date("Y-m-d H:i:s");

        // SECURITE: ICI ON DOIT VERIFIER QUE LES INFOS SONT CORRECTES
        // ON DOIT RECUPERER LES INFOS ENVOYEES PAR LE NAVIGATEUR        
        // ON VA STOCKER LES INFOS DANS LA TABLE SQL annonces
        // https://laravel.com/docs/5.7/validation#manually-creating-validators
        // https://laravel.com/docs/5.7/validation#available-validation-rules

        $validator = Validator::make($request->all(),[
            'nom' => 'required|max:160',
            'email' => 'required|unique:contacts|max:160',
            'message' => 'required',
        ]);




        if ($validator->fails())
        {
            //s'il y a des erreurs
            $tabAssoJson["erreur"] = "Il y a des erreurs";
        }
        else
        {
                       // CAS OU TOUTES LES INFOS SONT CORRECTES
            // ON PEUT LES STOCKER DANS LA TABLE SQL contacts
            // https://laravel.com/docs/5.8/eloquent#mass-assignment
            // ATTENTION: NE PAS OUBLIER LE PARAMETRAGE OBLIGATOIRE AVANT DE FAIRE CE CODE
            // sinon erreur: Add [titre] to fillable property to allow mass assignment on [App\Contact].
            // IL FAUT AJOUTER DU CODE DANS
            // app/Contact.php 
            Contact::create($request->only([
                "nom", "email", "message"
            ]));
        }




        return $tabAssoJson;
        // c'est laravel qui va transformer
        // le tableau associatif en JSON
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // READ pour afficher un contact
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        // ici traitement du formulaire UPDATE
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
