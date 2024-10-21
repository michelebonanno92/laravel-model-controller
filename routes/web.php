<?php

use Illuminate\Support\Facades\Route;

// Models
use App\Models\Movie;

Route::get('/', function () {
   $movies = Movie::all();

//    dd($movies);

       return view('welcome', compact('movies'));
    // return view('welcome',[
    //     'movies' => $movies
    // ]);
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
