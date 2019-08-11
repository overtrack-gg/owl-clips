<?php

/*
* This is where we store the public facing web routes
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/results/player/{player}', 'ResultsController@listByPlayer');
Route::get('/results/hero/{hero}', 'ResultsController@ListByHero');
