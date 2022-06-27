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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/route1', function () {
echo "<h1> Ini adalah halaman test 1 </h1>";
});
Route::get('/route2', function () {
echo "<h1> Ini adalah halaman test 2 </h1>";
});
