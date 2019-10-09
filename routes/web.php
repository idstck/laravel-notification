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

use App\Notifications\NewVisitor;

Route::get('/', function () {
    $user = Auth::user();
    $user->notify(new NewVisitor("A new user has visited."));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
