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
Route::get('unidades',['as' => 'unidades', 'uses' =>'SiteController@unidades']);
Route::get('/email',[
    'uses' => 'SiteController@sendEmailTest'

]);
Route::get('busca-franquia','SiteController@buscaFranquia');
Route::get('mapa','SiteController@mapa');
//area admin

//area login

Route::get('/portaldofranqueado', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/admin/noticia/{url_noticia}', 'NoticiaController@pegaNoticia');
//gerenciamento admin

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'where'=>['id'=>'[0-9]+']],function(){

    Route::get('/home',['as'=>'home', 'uses'=> 'AdminController@index']);

    Route::get('/videos',['as'=>'videos', 'uses'=> 'AdminController@videoAula' ]);
    Route::get('/manuais',['as'=>'manuais', 'uses'=> 'ArquivoController@getArquivos' ]);


    Route::group(['prefix' => 'gerencia'],function(){

//Grupo noticias
        Route::group(['prefix' => 'noticias'],function() {
            Route::get('/', ['as' => 'noticias', 'uses' => 'NoticiaController@totalNoticia']);
            Route::get('/criar', ['as' => 'noticias.create', 'uses' => 'NoticiaController@novaNoticia']);

            Route::post('/store', ['as' => 'noticias.store', 'uses' => 'NoticiaController@salvarNoticia']);
            Route::get('excluir/{id}', ['as' => 'noticias.delete', 'uses' => 'NoticiaController@deletaNoticia']);
            Route::get('editar/{id}', ['as' => 'noticias.edit', 'uses' => 'NoticiaController@editarNoticia']);
            Route::post('update/{id}', ['as' => 'noticias.update', 'uses' => 'NoticiaController@updateNoticia']);
        });
        Route::group(['prefix' => 'usuarios'],function() {
            Route::get('/', ['as' => 'usuarios', 'uses' => 'AdminController@totalUsuario']);

            Route::get('excluir/{id}', ['as' => 'usuarios.delete', 'uses' => 'AdminController@deletaUsuario']);
            Route::get('vermais/{id}',['as' => 'usuarios.log','uses'=> 'AdminController@logEventosUsuario']);

        });
        Route::group(['prefix' => 'logs'],function() {
            Route::get('/', ['as' => 'logs', 'uses' => 'EventoController@index']);

        });
        Route::group(['prefix' => 'arquivos'],function() {
            Route::get('/', ['as' => 'arquivos', 'uses' => 'ArquivoController@totalNoticia']);
            Route::get('/criar', ['as' => 'arquivos.create', 'uses' => 'ArquivoController@novoArquivo']);

            Route::post('/store', ['as' => 'arquivos.store', 'uses' => 'ArquivoController@salvarArquivo']);
            Route::get('excluir/{id}', ['as' => 'arquivos.delete', 'uses' => 'ArquivoController@deletaArquivo']);
            Route::get('editar/{id}', ['as' => 'arquivos.edit', 'uses' => 'ArquivoController@editarNoticia']);
            Route::post('update/{id}', ['as' => 'arquivos.update', 'uses' => 'ArquivoController@updateNoticia']);
        });
    });

});

;


Route::post('/contato-hotsite','SiteController@formHotsite');
Route::post('/form-franqueado','SiteController@formFranqueado');
Route::post('/get-contadortel','SiteController@contadorTelefone');
Route::get('/contato','SiteController@contato');
Route::get('/relatorios','SiteController@relatorio');
Route::get('/unidade/{url_nome}', 'SiteController@hotsite');
Route::get('/','EquipController@index');

Route::get('/{url_categoria}/{url_nome}','EquipController@equipInterno');
Route::get('/{url_categoria}','SiteController@categorySite');




Route::get('a-inovar','SiteController@sobre');


Route::get('noticias','BlogController@index');

//area portal do franqueado

