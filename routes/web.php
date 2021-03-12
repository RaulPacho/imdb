<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::delete('/showp/{id}', function ($id) {
    return [App\Http\Controllers\PeliculaController::class, 'destroy']($id);
    });
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get("/store",[App\Http\Controllers\PeliculaController::class, 'index'])->name("pelis.store"); 
    Route::post("/store",[App\Http\Controllers\PeliculaController::class, 'store'])->name("pelis.store");
    Route::get("/stored",[App\Http\Controllers\DirectorController::class, 'index'])->name("trabajadores.stored"); 
    Route::post("/stored",[App\Http\Controllers\DirectorController::class, 'stored'])->name("trabajadores.stored");
    Route::get("/storea",[App\Http\Controllers\ActorController::class, 'index'])->name("trabajadores.storea"); 
    Route::post("/storea",[App\Http\Controllers\ActorController::class, 'storea'])->name("trabajadores.storea");
});
Route::get("/showp", [App\Http\Controllers\PeliculaController::class, 'showp']) ->name("pelis.showp");
Route::delete("/showp/{id}",[App\Http\Controllers\PeliculaController::class, 'destroy']) ->name("destroy");

Route::get("/showa", [App\Http\Controllers\ActorController::class, 'showa']) ->name("trabajadores.showa");
Route::delete("/showa/{id}",[App\Http\Controllers\ActorController::class, 'destroy']) ->name("destroy");

Route::get("/showd", [App\Http\Controllers\DirectorController::class, 'showd']) ->name("trabajadores.showd");
Route::delete("/showd/{id}",[App\Http\Controllers\DirectorController::class, 'destroy']) ->name("destroy");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
