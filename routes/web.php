<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Router;

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
    $data = [
        'name' => 'World',
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'titolo' => 'Pagina About ♫',
    ];
    return view('about', $data);
})->name('about');;

Route::get('/contact', function () {
    $data = [
        'titolo' => 'My contacts ♫',
    ];
    return view('contact', $data);
})->name('contact');;
