<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function tableau(){ $pokedex=[
        'Bulbizarre' => [ 'type' => 'Plante', 'attaque' => 49, 'defense' => 49, 'pv' => 45, ], 
        'Salamèche' => [ 'type' => 'Feu', 'attaque' => 52, 'defense' => 43, 'pv' => 39, ], 
        'Carapuce' => [ 'type' => 'Eau', 'attaque' => 48, 'defense' => 65, 'pv' => 44, ]
                                        ];
                             }
    
//7 Route
public function index(){
    //Retourne une liste HTML des pokémons du pokedex

}

public function create(){
    //Retourne un formulaire HTML permettant de créer un pokemon 
    //(nom, type, attaque, défense et PV)

}

public function store(){
    //Vérifie que le nom, l'attaque, la défense et les PV sont bien 
    //reçus depuis le body de la requête
//Retourne un message HTML de confirmation et un récapitualitf du 
//pokemon créé (même si le pokemon n'est pas réellement enregistré)

}

public function show($pokemon){
    //	Retourne en HTML les détails d'un pokemon s'il existe dans 
    //le tableau pokedex sinon retourne un message d'erreur et un code HTTP 404

}

public function edit($pokemon){

    //	Retourne un formulaire HTML permettant de modifier les informations 
    //d'un pokemon (pré-repmpli avec les informations existantes). 
    //Si le pokemon n'existe pas dans le tableau, retourne un message d'erreur et un code HTTP 404
}

public function update($pokemon){
    //Vérifie que le nom du pokemon existe bien dans le tableau pokedex sinon 
    //retourne un message d'erreur HTML et un code HTTP 404
    //Vérifie que le nom, l'attaque, la défense et les PV sont bien 
    //reçus depuis le body de la requête
    //Retourne un message HTML de confirmation et un récapitualitf du 
    //pokemon modifié (même si le pokemon n'est pas réellement enregistré)

}

public function destroy($pokemon){

    //Vérifie que le nom du pokemon existe bien dans le tableau pokedex 
    //sinon retourne un message d'erreur HTML et un code HTTP 404
    //Retourne un message HTML de confirmation et le nom du pokemon 
    //supprimé (même si le pokemon n'est pas réellement supprimé)

}


    
}
