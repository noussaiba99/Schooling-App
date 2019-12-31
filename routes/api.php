<?php

use Illuminate\Http\Request;

use tp_Igl\User;
use tp_Igl\Demande;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/




/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',"HomeController@index");

Route::get('/etudiant',"EtudiantController@demande");
Route::post('/add', "EtudiantController@demande");

Route::get('/add', "EtudiantController@demande");


Route::get('/admin',"adminController@home");




Auth::routes();
Route::middleware('auth:api')->get('/user',"adminController@requestt");
