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

    return view('site.principal');
});

Route::get('/email',[
    'uses' => 'SiteController@sendEmailTest'

]);
Route::post('/contato-hotsite','SiteController@formHotsite');
Route::post('/form-franqueado','SiteController@formFranqueado');

Route::get('/contato','SiteController@contato');

Route::get('/unidade/{url_nome}', 'SiteController@hotsite');
Route::get('/','EquipController@index');

Route::get('/{url_categoria}/{url_nome}','EquipController@equipInterno');


Route::get('unidades',['as' => 'unidades', 'uses' =>'SiteController@unidades']);
Route::get('a-inovar','SiteController@sobre');

Route::get('busca-franquia','SiteController@buscaFranquia');