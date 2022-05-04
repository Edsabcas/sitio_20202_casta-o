<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstController;
use App\Http\Controllers\valController;
use App\Http\Livewire\InsComponent;
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
    return view('home');
});

Route::get('/inicio', [InstController::class, 'inicio']);

Route::get('/nosotros', [InstController::class, 'nosotros']);

Route::get('/adm', [InstController::class, 'admisiones']);
Route::post('/adm', [InsComponent::class, 'val2']);

Route::get('/val', [InstController::class, 'val']);

Route::get('/conducta', [valController::class, 'conducta']);

Route::get('/soportecnico', [InstController::class, 'soportecnico']);

Route::get('/restablecerusuario', [InstController::class, 'restablecerusuario']);