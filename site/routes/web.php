<?php

use Illuminate\Support\Facades\Route;
use App\Models\VisitorModel;
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
//    return view('home');
//});
//Route::get('/', 'HomeController@HomeIndex');
Route::get('/', 'HomeController@HomeIndex');
Route::get('/', 'HomeController@HomeIndex');
