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

Auth::routes();

Route::get('/upload', function () {
    return view('upload-file');
});

Route::post('/upload', function () {
    if(request()->has('mycsv')){
        return 'o arquivo existe';
    }
    return 'não existe';
});