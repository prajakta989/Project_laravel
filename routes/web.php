<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User_profile;


    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/;

Route::view('register', 'register');
Route::post('register', [User_profile::class, 'register']);


Route::view('login', 'login');
Route::post('login', [User_profile::class, 'login']);

Route::view('home', 'home');
Route::post('home', [User_profile::class, 'login']);
