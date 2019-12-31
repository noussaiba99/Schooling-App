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
use tp_Igl\User;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',"HomeController@index");

Route::get('/etudiant',"EtudiantController@demande");
Route::post('/add', "EtudiantController@demande");

Route::get('/add', "EtudiantController@demande");


Route::get('/admin',"adminController@home");




Auth::routes();

//Route::get('/home', "adminController@home");

/*Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@demande');*/