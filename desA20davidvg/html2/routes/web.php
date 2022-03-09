<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistroController;

use App\Http\Controllers\ArchivoInvitadosController;
use App\Http\Controllers\ClienteInvitadosController;

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

Route::get("hola", function(){
    return "Esto é unha proba";
});

Route::get("hola/{usuario}", function($usuario){
    return "Esto é unha proba $usuario";
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("registro", RegistroController::class);




Auth::routes();


Route::resource('users', UserController::class)->middleware("auth");

Route::resource('clientes/invitado', ClienteInvitadosController::class);

Route::resource('clientes', ClienteController::class)->middleware("auth");

Route::resource('archivos/invitados', ArchivoInvitadosController::class);

Route::resource('archivos', ArchivoController::class);
Route::post("/download", [ArchivoController::class, "download"])->name('archivos.download');
Route::resource('archivos/{id}', ArchivoController::class)->middleware("auth");







