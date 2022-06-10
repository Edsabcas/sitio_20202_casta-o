<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstController;
use App\Http\Controllers\valController;
use App\Http\Controllers\ValidacionController;
use App\Http\Livewire\InsComponent;
use App\Http\Controllers\Form1305Controller;
use App\Http\Controllers\ResumenController;
use App\Http\Controllers\ExportarController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\PDFController;


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
use App\Exports\ResumenExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('home');
});

Route::get('/inicio', [InstController::class, 'inicio']);

Route::get('/nosotros', [InstController::class, 'nosotros']);

Route::get('/adm', [InstController::class, 'admisiones']);
//FORMULARIO
Route::get('/forminfo', [Form1305Controller::class, 'index']);
//Resumen
Route::get('/resumen', [ResumenController::class, 'index']);

//Envio de mensajes
Route::get('/mensaje', [MensajesController::class, 'mensaje']);


//Exportar Excel
Route::get('/exp', [ExportarController::class, 'export']);

Route::post('/adm', [InsComponent::class, 'val2']);

Route::get('/val', [InstController::class, 'val']);

Route::get('/conducta', [valController::class, 'conducta']);

Route::get('/soportecnico', [InstController::class, 'soportecnico']);

Route::get('/restablecerusuario', [InstController::class, 'restablecerusuario']);

Route::get('/estadoproceso', [InstController::class, 'estadoproceso']);

//PDF descargable

Route::get('/Descargar_constancia', [PDFController::class, 'PDF_export']);
