<?php
use App\Notifications\VerifyEmail;
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
});

// Auth::routes();
Auth::routes(['verify' => true]);
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('welcome/{locale}', function ($locale) {
    App::setLocale($locale);
    echo __('messages.welcome');
});

//-----------------------------  supplier  ------------------------------
Route::get('/suppliercreate', 'SupplierController@create');


//-----------------------------  item Name  ------------------------------
Route::get('/itemnamecreate', 'ItemnameController@create');


 
