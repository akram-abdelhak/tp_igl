<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
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


Route::post('login' , 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details')->middleware("auth");// afficher le profil user connecté 
Route::get('absences', 'API\absenceController@index')->middleware("auth");// voir mes absences 
Route::post('absence/justification','API\absenceController@addjustif')->middleware("auth") ;//justifier une absence 
Route::post('InscriptionAdd','API\inscriptionController@store')->middleware("auth") ;// s'inscrir 
Route::get('IndexInscription','API\inscriptionController@index')->middleware("auth") ; // voir mon inscription 
Route::get('uploadFile/{id}','API\inscriptionController@uploadFile')->middleware("auth") ; // upload files des inscriptions 
});
