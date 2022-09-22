<?php

use App\Models\Controlpanel;
use App\Models\Contacto;
use App\Models\Factura;
use App\Http\Controllers\ReadXmlController;
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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/controlpanel',Controlpanel::class)->name('controlpanel');
    Route::get('/contactos',Contacto::class)->name('contactos');
    Route::get('/facturas',Factura::class)->name('facturas');
    Route::get("/read-xml/{name}/{limit?}", [ReadXmlController::class, "index"])->name('read-xml');
});
