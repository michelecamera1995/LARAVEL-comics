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
    $data = include  '../config/comics.php';
    return view('home', ['comics' => $data]);
});

Route::get('/details', function () {
    $data = include  '../config/comics.php';
    return view('details', ['comics' => $data[0]]);
});
