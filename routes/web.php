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

/**
 * Frontend routes
 */
Route::namespace('Front')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/nuestra-empresa', 'AboutController@about')->name('about');
    Route::get('/nuestros-servicios', 'ServicesController@services')->name('services');
    Route::get('/cobertura', 'ClientsController@clients')->name('clients');
    Route::get('/contacto', 'ContactController@contact')->name('contact');
    Route::post('/contacto', [
        'uses' => 'ContactController@postContact',
        'as' => 'contact.post'
    ]);
});

Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);