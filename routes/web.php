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
    return view('landing.page.index');
});


Route::get('/sd-kristen-pirngadi-about', function () {
    return view('landing.page.about');
});

Route::get('/sd-kristen-pirngadi-kelas', function () {
    return view('landing.page.allclass');
});


Route::get('/sd-kristen-pirngadi-guru', function () {
    return view('landing.page.guru');
});

Route::get('/sd-kristen-pirngadi-foto', function () {
    return view('landing.page.gallery');
});

Route::get('/sd-kristen-pirngadi-kontak', function () {
    return view('landing.page.kontak');
});




