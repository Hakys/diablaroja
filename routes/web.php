<?php

use Illuminate\Support\Facades\Route;
use App\Models\Factura;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\ControlpanelController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OperacionController;


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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    //Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/dashboard',ControlpanelController::class)->name('dashboard');
    Route::get('/contactos',[ContactoController::class,'index'])->name('contactos');
    Route::get('/contactos/{operacion}',[ContactoController::class,'filter'])->name('contactos.filter');
    //Route::get('/operacions/{operacion}',[OperacionController::class,'show'])->name('operacions.show');
    Route::get('/contacto/{contacto}',[ContactoController::class,'show'])->name('contactos.show');
    Route::get('/facturas',Factura::class)->name('facturas');
    Route::get('/productos',[ProductoController::class,'index'])->name('productos');    
    Route::get('/productos/{referencia}',[ProductoController::class,'show'])->name('productos.show');    
});
Route::get("/read-xml/{name}/{limit?}", [ReadXmlController::class, "index"])->name('read-xml');