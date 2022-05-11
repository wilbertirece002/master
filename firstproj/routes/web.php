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
Route::get('/news/{mm}/{dd}/{Y}', function ($mm, $dd, $Y) {
    return '<h1>'. $mm .'/'. $dd . '/' .$Y.'<h1>';
});
Route::get('/About/{age}/{name}', function ($age, $name) {
    return '<h1>I am '. $name . '. I am ' . $age . '<h1>';
});