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

Route::get('/about', function () {
    return 9 * 9;
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'cara fajar', 'class' => 9, 'phone' => '08.....']);
});

// Route::view('/contact', 'contact', ['name' => 'cara fajar', 'class' => 9, 'phone' => '08.....']);

Route::redirect('/contact', '/contact-us');

Route::get('/product', function () {
    return 'product';
});

Route::get('/product/{id}', function ($id) {
    return view('detail', ['id' => $id]);
});




Route::prefix('administrator')->group(function () {
    Route::get('/profil-admin', function () {
        return 'profil admin';
    });

    Route::get('/about-admin', function () {
        return 'about admin';
    });

    Route::get('/contact-admin2', function () {
        return 'contact admin';
    });

    Route::get('/profil-admin2', function () {
        return 'profil admin';
    });
});
