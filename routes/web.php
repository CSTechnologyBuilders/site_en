<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\FormulairesController;

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
    return view('welcome')->with('success', session('success'));
});


 Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

 Route::post('/ajouter',[FormulairesController::class,'ajouter_']);

 // Navigation
 Route::get('/DevWeb', function () {
    return view('DevWeb');
});

Route::get('/DevApp', function () {
    return view('DevApp');
});



Route::get('/Securite', function () {
    return view('Securite');
});

Route::get('/GraphDesign', function () {
    return view('GraphDesign');
});

Route::get('/Maintenance', function () {
    return view('Maintenance');
});
//------------------------------------------petit routge----------------------------------



