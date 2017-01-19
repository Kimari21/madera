<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('faq', function() { return view('faq'); });


Route::get('/list_caract_gamme', ['uses' => 'caracteristiques_gammeController@list', 'as' => 'list_caract_gamme']);
Route::get('/add_caract_gamme', ['uses' => 'caracteristiques_gammeController@add', 'as' => 'add_caract_gamme']);
Route::get('/edit_caract_gamme', ['uses' => 'caracteristiques_gammeController@edit', 'as' => 'edit_caract_gamme']);
Route::get('/supp_caract_gamme', ['uses' => 'caracteristiques_gammeController@supp', 'as' => 'supp_caract_gamme']);

Route::get('/list_client', ['uses' => 'clientController@list', 'as' => 'list_client']);
Route::get('/add_client', ['uses' => 'clientController@add', 'as' => 'add_client']);
Route::get('/edit_client', ['uses' => 'clientController@edit', 'as' => 'edit_client']);
Route::get('/supp_client', ['uses' => 'clientController@supp', 'as' => 'supp_client']);

Route::get('/list_composant', ['uses' => 'composantController@list', 'as' => 'list_composant']);
Route::get('/edit_composant', ['uses' => 'composantController@edit', 'as' => 'edit_composant']);
Route::get('/add_composant', ['uses' => 'composantController@add', 'as' => 'add_composant']);
Route::get('/supp_composant', ['uses' => 'composantController@supp', 'as' => 'supp_composant']);

Route::get('/list_compose', ['uses' => 'composeController@list', 'as' => 'list_compose']);
Route::get('/add_compose', ['uses' => 'composeController@add', 'as' => 'add_compose']);
Route::get('/edit_compose', ['uses' => 'composeController@edit', 'as' => 'edit_compose']);
Route::get('/supp_compose', ['uses' => 'composeController@supp', 'as' => 'supp_compose']);


Route::get('/list_connexion', ['uses' => 'connexionController@list', 'as' => 'list_connexion']);
Route::get('/add_connexion', ['uses' => 'connexionController@add', 'as' => 'add_connexion']);
Route::get('/edit_connexion', ['uses' => 'connexionController@edit', 'as' => 'edit_connexion']);
Route::get('/supp_connexion', ['uses' => 'connexionController@supp', 'as' => 'supp_connexion']);

Route::get('/list_devi', ['uses' => 'deviController@list', 'as' => 'list_devi']);
Route::get('/add_devi', ['uses' => 'deviController@add', 'as' => 'add_devi']);
Route::get('/edit_devi', ['uses' => 'deviController@edit', 'as' => 'edit_devi']);
Route::get('/supp_devi', ['uses' => 'deviController@supp', 'as' => 'supp_devi']);

Route::get('/list_etat', ['uses' => 'etatController@list', 'as' => 'list_etat']);
Route::get('/edit_etat', ['uses' => 'etatController@edit', 'as' => 'edit_etat']);
Route::get('/add_etat', ['uses' => 'etatController@add', 'as' => 'add_etat']);
Route::get('/supp_etat', ['uses' => 'etatController@supp', 'as' => 'supp_etat']);

Route::get('/list_famillecomposant', ['uses' => 'famillecomposantController@list', 'as' => 'list_famillecomposant']);
Route::get('/add_famillecomposant', ['uses' => 'famillecomposantController@add', 'as' => 'add_famillecomposant']);
Route::get('/edit_famillecomposant', ['uses' => 'famillecomposantController@edit', 'as' => 'edit_famillecomposant']);
Route::get('/supp_famillecomposant', ['uses' => 'famillecomposantController@supp', 'as' => 'supp_famillecomposant']);

Route::get('/list_fournisseur', ['uses' => 'fournisseurController@list', 'as' => 'list_fournisseur']);
Route::get('/add_fournisseur', ['uses' => 'fournisseurController@add', 'as' => 'add_fournisseur']);
Route::get('/edit_fournisseur', ['uses' => 'fournisseurController@edit', 'as' => 'edit_fournisseur']);
Route::get('/supp_fournisseur', ['uses' => 'fournisseurController@supp', 'as' => 'supp_fournisseur']);

Route::get('/list_gamme', ['uses' => 'gammeController@list', 'as' => 'list_gamme']);
Route::get('/add_gamme', ['uses' => 'gammeController@add', 'as' => 'add_gamme']);
Route::get('/edit_gamme', ['uses' => 'gammeController@edit', 'as' => 'edit_gamme']);
Route::get('/supp_gamme', ['uses' => 'gammeController@supp', 'as' => 'supp_gamme']);

Route::get('/list_module', ['uses' => 'moduleController@list', 'as' => 'list_module']);
Route::get('/edit_module', ['uses' => 'moduleController@edit', 'as' => 'edit_module']);
Route::get('/add_module', ['uses' => 'moduleController@add', 'as' => 'add_module']);
Route::get('/supp_module', ['uses' => 'moduleController@supp', 'as' => 'supp_module']);

Route::get('/list_photosgamme', ['uses' => 'photosgammeController@list', 'as' => 'list_photosgamme']);
Route::get('/add_photosgamme', ['uses' => 'photosgammeController@add', 'as' => 'add_photosgamme']);
Route::get('/edit_photosgamme', ['uses' => 'photosgammeController@edit', 'as' => 'edit_photosgamme']);
Route::get('/supp_photosgamme', ['uses' => 'photosgammeController@supp', 'as' => 'supp_photosgamme']);



Route::get('/list_photosmodule', ['uses' => 'photosmoduleController@list', 'as' => 'list_photosmodule']);
Route::get('/edit_photosmodule', ['uses' => 'photosmoduleController@edit', 'as' => 'edit_photosmodule']);
Route::get('/add_photosmodule', ['uses' => 'photosmoduleController@add', 'as' => 'add_photosmodule']);
Route::get('/supp_photosmodule', ['uses' => 'photosmoduleController@supp', 'as' => 'supp_photosmodule']);

Route::get('/list_possede', ['uses' => 'possedeController@list', 'as' => 'list_possede']);
Route::get('/add_possede', ['uses' => 'possedeController@add', 'as' => 'add_possede']);
Route::get('/edit_possede', ['uses' => 'possedeController@edit', 'as' => 'edit_possede']);
Route::get('/supp_possede', ['uses' => 'possedeController@supp', 'as' => 'supp_possede']);

Route::get('/list_role', ['uses' => 'roleController@list', 'as' => 'list_role']);
Route::get('/add_role', ['uses' => 'roleController@add', 'as' => 'add_role']);
Route::get('/edit_role', ['uses' => 'roleController@edit', 'as' => 'edit_role']);
Route::get('/supp_role', ['uses' => 'roleController@supp', 'as' => 'supp_role']);

Route::get('/list_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@list', 'as' => 'list_sousfamillecomposant']);
Route::get('/add_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@add', 'as' => 'add_sousfamillecomposant']);
Route::get('/edit_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@edit', 'as' => 'edit_sousfamillecomposant']);
Route::get('/supp_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@supp', 'as' => 'supp_sousfamillecomposant']);

Route::get('/list_statut', ['uses' => 'statutController@list', 'as' => 'list_statut']);
Route::get('/edit_statut', ['uses' => 'statutController@edit', 'as' => 'edit_statut']);
Route::get('/add_statut', ['uses' => 'statutController@add', 'as' => 'add_statut']);
Route::get('/supp_statut', ['uses' => 'statutController@supp', 'as' => 'supp_statut']);

Route::get('/list_utilisateur', ['uses' => 'utilisateurController@list', 'as' => 'list_utilisateur']);
Route::get('/add_utilisateur', ['uses' => 'utilisateurController@add', 'as' => 'add_utilisateur']);
Route::get('/edit_utilisateur', ['uses' => 'utilisateurController@edit', 'as' => 'edit_utilisateur']);
Route::get('/supp_utilisateur', ['uses' => 'utilisateurController@supp', 'as' => 'supp_utilisateurs']);






Route::post('/list_caract_gamme', ['uses' => 'caracteristiques_gammeController@list', 'as' => 'list_caract_gamme']);
Route::post('/add_caract_gamme', ['uses' => 'caracteristiques_gammeController@add', 'as' => 'add_caract_gamme']);
Route::post('/edit_caract_gamme', ['uses' => 'caracteristiques_gammeController@edit', 'as' => 'edit_caract_gamme']);
Route::post('/supp_caract_gamme', ['uses' => 'caracteristiques_gammeController@supp', 'as' => 'supp_caract_gamme']);

Route::post('/list_client', ['uses' => 'clientController@list', 'as' => 'list_client']);
Route::post('/add_client', ['uses' => 'clientController@add', 'as' => 'add_client']);
Route::post('/edit_client', ['uses' => 'clientController@edit', 'as' => 'edit_client']);
Route::post('/supp_client', ['uses' => 'clientController@supp', 'as' => 'supp_client']);

Route::post('/list_composant', ['uses' => 'composantController@list', 'as' => 'list_composant']);
Route::post('/edit_composant', ['uses' => 'composantController@edit', 'as' => 'edit_composant']);
Route::post('/add_composant', ['uses' => 'composantController@add', 'as' => 'add_composant']);
Route::post('/supp_composant', ['uses' => 'composantController@supp', 'as' => 'supp_composant']);

Route::post('/list_compose', ['uses' => 'composeController@list', 'as' => 'list_compose']);
Route::post('/add_compose', ['uses' => 'composeController@add', 'as' => 'add_compose']);
Route::post('/edit_compose', ['uses' => 'composeController@edit', 'as' => 'edit_compose']);
Route::post('/supp_compose', ['uses' => 'composeController@supp', 'as' => 'supp_compose']);


Route::post('/list_connexion', ['uses' => 'connexionController@list', 'as' => 'list_connexion']);
Route::post('/add_connexion', ['uses' => 'connexionController@add', 'as' => 'add_connexion']);
Route::post('/edit_connexion', ['uses' => 'connexionController@edit', 'as' => 'edit_connexion']);
Route::post('/supp_connexion', ['uses' => 'connexionController@supp', 'as' => 'supp_connexion']);

Route::post('/list_devi', ['uses' => 'deviController@list', 'as' => 'list_devi']);
Route::post('/add_devi', ['uses' => 'deviController@add', 'as' => 'add_devi']);
Route::post('/edit_devi', ['uses' => 'deviController@edit', 'as' => 'edit_devi']);
Route::post('/supp_devi', ['uses' => 'deviController@supp', 'as' => 'supp_devi']);

Route::post('/list_etat', ['uses' => 'etatController@list', 'as' => 'list_etat']);
Route::post('/edit_etat', ['uses' => 'etatController@edit', 'as' => 'edit_etat']);
Route::post('/add_etat', ['uses' => 'etatController@add', 'as' => 'add_etat']);
Route::post('/supp_etat', ['uses' => 'etatController@supp', 'as' => 'supp_etat']);

Route::post('/list_famillecomposant', ['uses' => 'famillecomposantController@list', 'as' => 'list_famillecomposant']);
Route::post('/add_famillecomposant', ['uses' => 'famillecomposantController@add', 'as' => 'add_famillecomposant']);
Route::post('/edit_famillecomposant', ['uses' => 'famillecomposantController@edit', 'as' => 'edit_famillecomposant']);
Route::post('/supp_famillecomposant', ['uses' => 'famillecomposantController@supp', 'as' => 'supp_famillecomposant']);

Route::post('/list_fournisseur', ['uses' => 'fournisseurController@list', 'as' => 'list_fournisseur']);
Route::post('/add_fournisseur', ['uses' => 'fournisseurController@add', 'as' => 'add_fournisseur']);
Route::post('/edit_fournisseur', ['uses' => 'fournisseurController@edit', 'as' => 'edit_fournisseur']);
Route::post('/supp_fournisseur', ['uses' => 'fournisseurController@supp', 'as' => 'supp_fournisseur']);

Route::post('/list_gamme', ['uses' => 'gammeController@list', 'as' => 'list_gamme']);
Route::post('/add_gamme', ['uses' => 'gammeController@add', 'as' => 'add_gamme']);
Route::post('/edit_gamme', ['uses' => 'gammeController@edit', 'as' => 'edit_gamme']);
Route::post('/supp_gamme', ['uses' => 'gammeController@supp', 'as' => 'supp_gamme']);

Route::post('/list_module', ['uses' => 'moduleController@list', 'as' => 'list_module']);
Route::post('/edit_module', ['uses' => 'moduleController@edit', 'as' => 'edit_module']);
Route::post('/add_module', ['uses' => 'moduleController@add', 'as' => 'add_module']);
Route::post('/supp_module', ['uses' => 'moduleController@supp', 'as' => 'supp_module']);

Route::post('/list_photosgamme', ['uses' => 'photosgammeController@list', 'as' => 'list_photosgamme']);
Route::post('/add_photosgamme', ['uses' => 'photosgammeController@add', 'as' => 'add_photosgamme']);
Route::post('/edit_photosgamme', ['uses' => 'photosgammeController@edit', 'as' => 'edit_photosgamme']);
Route::post('/supp_photosgamme', ['uses' => 'photosgammeController@supp', 'as' => 'supp_photosgamme']);



Route::post('/list_photosmodule', ['uses' => 'photosmoduleController@list', 'as' => 'list_photosmodule']);
Route::post('/edit_photosmodule', ['uses' => 'photosmoduleController@edit', 'as' => 'edit_photosmodule']);
Route::post('/add_photosmodule', ['uses' => 'photosmoduleController@add', 'as' => 'add_photosmodule']);
Route::post('/supp_photosmodule', ['uses' => 'photosmoduleController@supp', 'as' => 'supp_photosmodule']);

Route::post('/list_possede', ['uses' => 'possedeController@list', 'as' => 'list_possede']);
Route::post('/add_possede', ['uses' => 'possedeController@add', 'as' => 'add_possede']);
Route::post('/edit_possede', ['uses' => 'possedeController@edit', 'as' => 'edit_possede']);
Route::post('/supp_possede', ['uses' => 'possedeController@supp', 'as' => 'supp_possede']);

Route::post('/list_role', ['uses' => 'roleController@list', 'as' => 'list_role']);
Route::post('/add_role', ['uses' => 'roleController@add', 'as' => 'add_role']);
Route::post('/edit_role', ['uses' => 'roleController@edit', 'as' => 'edit_role']);
Route::post('/supp_role', ['uses' => 'roleController@supp', 'as' => 'supp_role']);

Route::post('/list_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@list', 'as' => 'list_sousfamillecomposant']);
Route::post('/add_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@add', 'as' => 'add_sousfamillecomposant']);
Route::post('/edit_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@edit', 'as' => 'edit_sousfamillecomposant']);
Route::post('/supp_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@supp', 'as' => 'supp_sousfamillecomposant']);

Route::post('/list_statut', ['uses' => 'statutController@list', 'as' => 'list_statut']);
Route::post('/edit_statut', ['uses' => 'statutController@edit', 'as' => 'edit_statut']);
Route::post('/add_statut', ['uses' => 'statutController@add', 'as' => 'add_statut']);
Route::post('/supp_statut', ['uses' => 'statutController@supp', 'as' => 'supp_statut']);

Route::post('/list_utilisateur', ['uses' => 'utilisateurController@list', 'as' => 'list_utilisateur']);
Route::post('/add_utilisateur', ['uses' => 'utilisateurController@add', 'as' => 'add_utilisateur']);
Route::post('/edit_utilisateur', ['uses' => 'utilisateurController@edit', 'as' => 'edit_utilisateur']);
Route::post('/supp_utilisateur', ['uses' => 'utilisateurController@supp', 'as' => 'supp_utilisateurs']);

