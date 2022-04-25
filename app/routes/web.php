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

Auth::routes([
    'register' => false
]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    // = RESOURCE =
    // GET          /             HomeController@index
    // GET          /create       HomeController@create
    // POST         /             HomeController@store
    // GET          /{id}         HomeController@show (não utilizado)
    // GET          /{id}/edit    HomeController@edit
    // PUT/PATCH    /{id}         HomeController@update
    // DELETE       /{id}         HomeController@destroy
    Route::resource('', 'HomeController');
    Route::resource('groups', 'GroupsController');
    Route::resource('goals', 'GoalsController');
    Route::resource('entries', 'EntriesController');
    Route::get('reports/check-balance-sheet', 'ReportsController@checkBalanceSheet');
    Route::get('reports/amount-per-group', 'ReportsController@amountPerGroup');

    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});
