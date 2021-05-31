<?php

use Illuminate\Support\Facades\Auth;
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
})->name('welcome');


Route::name('Home.')->group(function(){
    Route::resource('Home' , 'HomeController');
});

Route::name('register.')->group(function(){
    Route::resource('register' , 'RegisterController');
});

Route::name('welcome.')->group(function(){
    Route::resource('welcome' , 'welcomeController');
});

Route::name('password.')->group(function(){
    Route::resource('password' , 'passwordController');
});


Route::name('Produits.')->group(function(){
    Route::resource('Produits' , 'ProduitsController');
});

Route::name('Create.')->group(function(){
    Route::resource('Create' , 'CreateController');
});

Route::name('/')->group(function(){
    Route::resource('recettes' , 'recettesController');
});

Route::name('/')->group(function(){
    Route::resource('text' , 'textController');
});

Route::name('/')->group(function(){
    Route::resource('commander' , 'commanderController');
});

Route::name('enregistrements.')->group(function(){
    Route::resource('enregistrements' , 'enregistrementsController');
});

Route::name('Stocks.')->group(function(){
    Route::resource('Stocks' , 'StocksController');
});

Route::name('/')->group(function(){
    Route::resource('CommandeMail' , 'CommandeMailController');
});

Route::name('Fournisseurs.')->group(function(){
    Route::resource('Fournisseurs' , 'FournisseursController');
});

Route::name('')->group(function(){
    Route::resource('Test' , 'TestController');
});

Auth::routes();

Route::get('home', 'HomeController@index')->middleware('auth')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', 'UsersController')->middleware('auth');
});