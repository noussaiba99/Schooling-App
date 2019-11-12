<?php

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
use tp_Igl\Etudiant;
use tp_Igl\Demande;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/{id}/{name}',"adminController@contact" );

Route::get('/product',"productController@Viewproduct");
Route::get('/etudiant',"EtudiantController@viewEtudiant");

Route::post('/add',"EtudiantController@addEtudiant");
Route::get('/add',"EtudiantController@addEtudiant");
Route::get('/add/{id}',function($id)
{
    $etudiant=Etudiant::find($id);
    $etudiant->delete();
    return redirect("etudiant");
}
);

Route::post('/modifier/{id}',"EtudiantController@modifierEtudiant");
Route::get('/modifier/{id}',"EtudiantController@modifierEtudiant");

Route::post('/modifier',"EtudiantController@modifier");
Route::get('/modifier',"EtudiantController@modifier");

Route::get('/demande',"DemandeController@viewDemande");
Route::get('/addd',"DemandeController@addDemande");
Route::post('/addd',"DemandeController@addDemande");


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('admin.home');
Route::get('/home', "adminController@home");
