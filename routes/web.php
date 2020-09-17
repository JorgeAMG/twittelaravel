<?php

use App\Twitter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $twitters = Twitter::paginate(2);
    return view("usuario.twitter", compact("twitters"));
});


Route::resource("twitter", "Admin\TwitterAdminController");


Auth::routes();
