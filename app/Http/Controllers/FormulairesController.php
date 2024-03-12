<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class FormulairesController extends Controller
{
    public function ajouter_(Request $request)
  {
    $request->validate([
        'nom' =>'required',
        'mail' =>'required',
        'message'=>'required',
        'object' =>'required',
    ]);

    $client= new Client();
    $client->nom=$request->nom;
    $client->mail=$request->mail;
    $client->object=$request->object;
    $client->message=$request->message;
    $client->save();

    return redirect('/')->with('success', 'Enregistrement reussit !.');
  }
}
