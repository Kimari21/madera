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


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/faq', function() { return view('faq'); });


Route::get('/list_caract_gamme', ['uses' => 'caracteristiques_gammeController@getlist', 'as' => 'list_caract_gamme']);
Route::get('/add_caract_gamme', ['uses' => 'caracteristiques_gammeController@getadd', 'as' => 'add_caract_gamme']);
Route::get('/edit_caract_gamme', ['uses' => 'caracteristiques_gammeController@getedit', 'as' => 'edit_caract_gamme']);
Route::get('/supp_caract_gamme', ['uses' => 'caracteristiques_gammeController@getsupp', 'as' => 'supp_caract_gamme']);

Route::get('/list_client', ['uses' => 'clientController@getlist', 'as' => 'list_client']);
Route::get('/add_client', ['uses' => 'clientController@getadd', 'as' => 'add_client']);
Route::get('/edit_client', ['uses' => 'clientController@getedit', 'as' => 'edit_client']);
Route::get('/supp_client', ['uses' => 'clientController@getsupp', 'as' => 'supp_client']);

Route::get('/list_composant', ['uses' => 'composantController@getlist', 'as' => 'list_composant']);
Route::get('/edit_composant', ['uses' => 'composantController@getedit', 'as' => 'edit_composant']);
Route::get('/add_composant', ['uses' => 'composantController@getadd', 'as' => 'add_composant']);
Route::get('/supp_composant', ['uses' => 'composantController@getsupp', 'as' => 'supp_composant']);

Route::get('/list_compose', ['uses' => 'composeController@getlist', 'as' => 'list_compose']);
Route::get('/add_compose', ['uses' => 'composeController@getadd', 'as' => 'add_compose']);
Route::get('/edit_compose', ['uses' => 'composeController@getedit', 'as' => 'edit_compose']);
Route::get('/supp_compose', ['uses' => 'composeController@getsupp', 'as' => 'supp_compose']);


Route::get('/list_connexion', ['uses' => 'connexionController@getlist', 'as' => 'list_connexion']);
Route::get('/add_connexion', ['uses' => 'connexionController@getadd', 'as' => 'add_connexion']);
Route::get('/edit_connexion', ['uses' => 'connexionController@getedit', 'as' => 'edit_connexion']);
Route::get('/supp_connexion', ['uses' => 'connexionController@getsupp', 'as' => 'supp_connexion']);

Route::get('/list_devi', ['uses' => 'deviController@getlist', 'as' => 'list_devi']);
Route::get('/add_devi', ['uses' => 'deviController@getadd', 'as' => 'add_devi']);
Route::get('/edit_devi', ['uses' => 'deviController@getedit', 'as' => 'edit_devi']);
Route::get('/supp_devi', ['uses' => 'deviController@getsupp', 'as' => 'supp_devi']);

Route::get('/list_etat', ['uses' => 'etatController@getlist', 'as' => 'list_etat']);
Route::get('/edit_etat', ['uses' => 'etatController@getedit', 'as' => 'edit_etat']);
Route::get('/add_etat', ['uses' => 'etatController@getadd', 'as' => 'add_etat']);
Route::get('/supp_etat', ['uses' => 'etatController@getsupp', 'as' => 'supp_etat']);

Route::get('/list_famillecomposant', ['uses' => 'famillecomposantController@getlist', 'as' => 'list_famillecomposant']);
Route::get('/add_famillecomposant', ['uses' => 'famillecomposantController@getadd', 'as' => 'add_famillecomposant']);
Route::get('/edit_famillecomposant', ['uses' => 'famillecomposantController@getedit', 'as' => 'edit_famillecomposant']);
Route::get('/supp_famillecomposant', ['uses' => 'famillecomposantController@getsupp', 'as' => 'supp_famillecomposant']);

Route::get('/list_fournisseur', ['uses' => 'fournisseurController@getlist', 'as' => 'list_fournisseur']);
Route::get('/add_fournisseur', ['uses' => 'fournisseurController@getadd', 'as' => 'add_fournisseur']);
Route::get('/edit_fournisseur', ['uses' => 'fournisseurController@getedit', 'as' => 'edit_fournisseur']);
Route::get('/supp_fournisseur', ['uses' => 'fournisseurController@getsupp', 'as' => 'supp_fournisseur']);

Route::get('/list_gamme', ['uses' => 'gammeController@getlist', 'as' => 'list_gamme']);
Route::get('/add_gamme', ['uses' => 'gammeController@getadd', 'as' => 'add_gamme']);
Route::get('/edit_gamme', ['uses' => 'gammeController@getedit', 'as' => 'edit_gamme']);
Route::get('/supp_gamme', ['uses' => 'gammeController@getsupp', 'as' => 'supp_gamme']);

Route::get('/list_module', ['uses' => 'moduleController@getlist', 'as' => 'list_module']);
Route::get('/edit_module', ['uses' => 'moduleController@getedit', 'as' => 'edit_module']);
Route::get('/add_module', ['uses' => 'moduleController@getadd', 'as' => 'add_module']);
Route::get('/supp_module', ['uses' => 'moduleController@getsupp', 'as' => 'supp_module']);

Route::get('/list_photosgamme', ['uses' => 'photosgammeController@getlist', 'as' => 'list_photosgamme']);
Route::get('/add_photosgamme', ['uses' => 'photosgammeController@getadd', 'as' => 'add_photosgamme']);
Route::get('/edit_photosgamme', ['uses' => 'photosgammeController@getedit', 'as' => 'edit_photosgamme']);
Route::get('/supp_photosgamme', ['uses' => 'photosgammeController@getsupp', 'as' => 'supp_photosgamme']);



Route::get('/list_photosmodule', ['uses' => 'photosmoduleController@getlist', 'as' => 'list_photosmodule']);
Route::get('/edit_photosmodule', ['uses' => 'photosmoduleController@getedit', 'as' => 'edit_photosmodule']);
Route::get('/add_photosmodule', ['uses' => 'photosmoduleController@getadd', 'as' => 'add_photosmodule']);
Route::get('/supp_photosmodule', ['uses' => 'photosmoduleController@getsupp', 'as' => 'supp_photosmodule']);

Route::get('/list_possede', ['uses' => 'possedeController@getlist', 'as' => 'list_possede']);
Route::get('/add_possede', ['uses' => 'possedeController@getadd', 'as' => 'add_possede']);
Route::get('/edit_possede', ['uses' => 'possedeController@getedit', 'as' => 'edit_possede']);
Route::get('/supp_possede', ['uses' => 'possedeController@getsupp', 'as' => 'supp_possede']);

Route::get('/list_role', ['uses' => 'roleController@getlist', 'as' => 'list_role']);
Route::get('/add_role', ['uses' => 'roleController@getadd', 'as' => 'add_role']);
Route::get('/edit_role', ['uses' => 'roleController@getedit', 'as' => 'edit_role']);
Route::get('/supp_role', ['uses' => 'roleController@getsupp', 'as' => 'supp_role']);

Route::get('/list_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@getlist', 'as' => 'list_sousfamillecomposant']);
Route::get('/add_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@getadd', 'as' => 'add_sousfamillecomposant']);
Route::get('/edit_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@getedit', 'as' => 'edit_sousfamillecomposant']);
Route::get('/supp_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@getsupp', 'as' => 'supp_sousfamillecomposant']);

Route::get('/list_statut', ['uses' => 'statutController@getlist', 'as' => 'list_statut']);
Route::get('/edit_statut', ['uses' => 'statutController@getedit', 'as' => 'edit_statut']);
Route::get('/add_statut', ['uses' => 'statutController@getadd', 'as' => 'add_statut']);
Route::get('/supp_statut', ['uses' => 'statutController@getsupp', 'as' => 'supp_statut']);

Route::get('/list_utilisateur', ['uses' => 'utilisateurController@getlist', 'as' => 'list_utilisateur']);
Route::get('/add_utilisateur', ['uses' => 'utilisateurController@getadd', 'as' => 'add_utilisateur']);
Route::get('/edit_utilisateur', ['uses' => 'utilisateurController@getedit', 'as' => 'edit_utilisateur']);
Route::get('/supp_utilisateur', ['uses' => 'utilisateurController@getsupp', 'as' => 'supp_utilisateurs']);






Route::post('/list_caract_gamme', ['uses' => 'caracteristiques_gammeController@postlist', 'as' => 'list_caract_gamme']);
Route::post('/add_caract_gamme', ['uses' => 'caracteristiques_gammeController@postadd', 'as' => 'add_caract_gamme']);
Route::post('/edit_caract_gamme', ['uses' => 'caracteristiques_gammeController@postedit', 'as' => 'edit_caract_gamme']);
Route::post('/supp_caract_gamme', ['uses' => 'caracteristiques_gammeController@postsupp', 'as' => 'supp_caract_gamme']);

Route::post('/list_client', ['uses' => 'clientController@postlist', 'as' => 'list_client']);
Route::post('/add_client', ['uses' => 'clientController@postadd', 'as' => 'add_client']);
Route::post('/edit_client', ['uses' => 'clientController@postedit', 'as' => 'edit_client']);
Route::post('/supp_client', ['uses' => 'clientController@postsupp', 'as' => 'supp_client']);
Route::post('/valid_edit_client', ['uses' => 'clientController@postvalidedit', 'as' => 'valid_edit_client']);

Route::post('/list_composant', ['uses' => 'composantController@postlist', 'as' => 'list_composant']);
Route::post('/edit_composant', ['uses' => 'composantController@postedit', 'as' => 'edit_composant']);
Route::post('/add_composant', ['uses' => 'composantController@postadd', 'as' => 'add_composant']);
Route::post('/supp_composant', ['uses' => 'composantController@postsupp', 'as' => 'supp_composant']);

Route::post('/list_compose', ['uses' => 'composeController@postlist', 'as' => 'list_compose']);
Route::post('/add_compose', ['uses' => 'composeController@postadd', 'as' => 'add_compose']);
Route::post('/edit_compose', ['uses' => 'composeController@postedit', 'as' => 'edit_compose']);
Route::post('/supp_compose', ['uses' => 'composeController@postsupp', 'as' => 'supp_compose']);


Route::post('/list_connexion', ['uses' => 'connexionController@postlist', 'as' => 'list_connexion']);
Route::post('/add_connexion', ['uses' => 'connexionController@postadd', 'as' => 'add_connexion']);
Route::post('/edit_connexion', ['uses' => 'connexionController@postedit', 'as' => 'edit_connexion']);
Route::post('/supp_connexion', ['uses' => 'connexionController@postsupp', 'as' => 'supp_connexion']);

Route::post('/list_devi', ['uses' => 'deviController@postlist', 'as' => 'list_devi']);
Route::post('/add_devi', ['uses' => 'deviController@postadd', 'as' => 'add_devi']);
Route::post('/edit_devi', ['uses' => 'deviController@postedit', 'as' => 'edit_devi']);
Route::post('/supp_devi', ['uses' => 'deviController@postsupp', 'as' => 'supp_devi']);
Route::post('/valid_edit_devi', ['uses' => 'deviController@postvalidedit', 'as' => 'valid_edit_devi']);

Route::post('/list_etat', ['uses' => 'etatController@postlist', 'as' => 'list_etat']);
Route::post('/edit_etat', ['uses' => 'etatController@postedit', 'as' => 'edit_etat']);
Route::post('/add_etat', ['uses' => 'etatController@postadd', 'as' => 'add_etat']);
Route::post('/supp_etat', ['uses' => 'etatController@postsupp', 'as' => 'supp_etat']);

Route::post('/list_famillecomposant', ['uses' => 'famillecomposantController@postlist', 'as' => 'list_famillecomposant']);
Route::post('/add_famillecomposant', ['uses' => 'famillecomposantController@postadd', 'as' => 'add_famillecomposant']);
Route::post('/edit_famillecomposant', ['uses' => 'famillecomposantController@postedit', 'as' => 'edit_famillecomposant']);
Route::post('/supp_famillecomposant', ['uses' => 'famillecomposantController@postsupp', 'as' => 'supp_famillecomposant']);

Route::post('/list_fournisseur', ['uses' => 'fournisseurController@postlist', 'as' => 'list_fournisseur']);
Route::post('/add_fournisseur', ['uses' => 'fournisseurController@postadd', 'as' => 'add_fournisseur']);
Route::post('/edit_fournisseur', ['uses' => 'fournisseurController@postedit', 'as' => 'edit_fournisseur']);
Route::post('/supp_fournisseur', ['uses' => 'fournisseurController@postsupp', 'as' => 'supp_fournisseur']);

Route::post('/list_gamme', ['uses' => 'gammeController@postlist', 'as' => 'list_gamme']);
Route::post('/add_gamme', ['uses' => 'gammeController@postadd', 'as' => 'add_gamme']);
Route::post('/edit_gamme', ['uses' => 'gammeController@postedit', 'as' => 'edit_gamme']);
Route::post('/supp_gamme', ['uses' => 'gammeController@postsupp', 'as' => 'supp_gamme']);
Route::post('/valid_edit_gamme', ['uses' => 'gammeController@postvalidedit', 'as' => 'valid_edit_gamme']);


Route::post('/list_module', ['uses' => 'moduleController@postlist', 'as' => 'list_module']);
Route::post('/edit_module', ['uses' => 'moduleController@postedit', 'as' => 'edit_module']);
Route::post('/add_module', ['uses' => 'moduleController@postadd', 'as' => 'add_module']);
Route::post('/supp_module', ['uses' => 'moduleController@postsupp', 'as' => 'supp_module']);
Route::post('/valid_edit_module', ['uses' => 'moduleController@postvalidedit', 'as' => 'valid_edit_module']);


Route::post('/list_photosgamme', ['uses' => 'photosgammeController@postlist', 'as' => 'list_photosgamme']);
Route::post('/add_photosgamme', ['uses' => 'photosgammeController@postadd', 'as' => 'add_photosgamme']);
Route::post('/edit_photosgamme', ['uses' => 'photosgammeController@postedit', 'as' => 'edit_photosgamme']);
Route::post('/supp_photosgamme', ['uses' => 'photosgammeController@postsupp', 'as' => 'supp_photosgamme']);



Route::post('/list_photosmodule', ['uses' => 'photosmoduleController@postlist', 'as' => 'list_photosmodule']);
Route::post('/edit_photosmodule', ['uses' => 'photosmoduleController@postedit', 'as' => 'edit_photosmodule']);
Route::post('/add_photosmodule', ['uses' => 'photosmoduleController@postadd', 'as' => 'add_photosmodule']);
Route::post('/supp_photosmodule', ['uses' => 'photosmoduleController@postsupp', 'as' => 'supp_photosmodule']);

Route::post('/list_possede', ['uses' => 'possedeController@postlist', 'as' => 'list_possede']);
Route::post('/add_possede', ['uses' => 'possedeController@postadd', 'as' => 'add_possede']);
Route::post('/edit_possede', ['uses' => 'possedeController@postedit', 'as' => 'edit_possede']);
Route::post('/supp_possede', ['uses' => 'possedeController@postsupp', 'as' => 'supp_possede']);

Route::post('/list_role', ['uses' => 'roleController@postlist', 'as' => 'list_role']);
Route::post('/add_role', ['uses' => 'roleController@postadd', 'as' => 'add_role']);
Route::post('/edit_role', ['uses' => 'roleController@postedit', 'as' => 'edit_role']);
Route::post('/supp_role', ['uses' => 'roleController@postsupp', 'as' => 'supp_role']);

Route::post('/list_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@postlist', 'as' => 'list_sousfamillecomposant']);
Route::post('/add_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@postadd', 'as' => 'add_sousfamillecomposant']);
Route::post('/edit_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@postedit', 'as' => 'edit_sousfamillecomposant']);
Route::post('/supp_sousfamillecomposant', ['uses' => 'sousfamillecomposantController@postsupp', 'as' => 'supp_sousfamillecomposant']);

Route::post('/list_statut', ['uses' => 'statutController@postlist', 'as' => 'list_statut']);
Route::post('/edit_statut', ['uses' => 'statutController@postedit', 'as' => 'edit_statut']);
Route::post('/add_statut', ['uses' => 'statutController@postadd', 'as' => 'add_statut']);
Route::post('/supp_statut', ['uses' => 'statutController@postsupp', 'as' => 'supp_statut']);

Route::post('/list_utilisateur', ['uses' => 'utilisateurController@postlist', 'as' => 'list_utilisateur']);
Route::post('/add_utilisateur', ['uses' => 'utilisateurController@postadd', 'as' => 'add_utilisateur']);
Route::post('/edit_utilisateur', ['uses' => 'utilisateurController@postedit', 'as' => 'edit_utilisateur']);
Route::post('/supp_utilisateur', ['uses' => 'utilisateurController@postsupp', 'as' => 'supp_utilisateurs']);
Route::post('/valid_edit_utilisateurs', ['uses' => 'utilisateursController@postvalidedit', 'as' => 'valid_edit_utilisateurs']);
