<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', 'inscriptionController@formulaire');

Route::post('/inscription', 'inscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');

Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/mon-compte', 'CompteController@compte');

Route::post('/modification-mdp', 'CompteController@modificationmdp');

Route::get('/deconnexion', 'CompteController@deconnexion');

Route::get('/candidature', 'CandidatureController@candidature');	

Route::post('/deposercandidature', 'CandidatureController@deposercandidature');

Route::get('/validation','CandidatureController@valider');

Route::get('/telecharger', 'CandidatureController@telecharge');

Route::get('/creationProf', 'AdminController@formulaire');

Route::post('/creationProf', 'AdminController@traitement');

Route::get('/compteProf', 'AdminController@suivre');

Route::get('/afficherDossier/{id}','AdminController@suivreDossier')->name('afficherUnDossier');

Route::post('/changerStatut/{id}', 'AdminController@changer')->name('changerStatut');

Route::post('/completerCandidature','CandidatureController@redeposercandidature');

