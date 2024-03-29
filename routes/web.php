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
Route::get('/dams', function () {
    return view('dams');
});
Route::get('/ipa', function () {
    return view('ipa');
});
Route::get('/itkp', function () {
    return view('itkp');
});
Route::get('/weekly-report', function () {
    return view('weekly');
});
Route::get('/iku', function () {
    return view('iku');
});
