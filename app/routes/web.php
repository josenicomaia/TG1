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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'index');
Route::resource('groups', 'GroupsController');
Route::resource('entries', 'EntriesController');
Route::get('reports/check-balance-sheet', 'ReportsController@checkBalanceSheet');
Route::get('reports/amount-per-group', 'ReportsController@amountPerGroup');
