<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChampionController;

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
//RUTAS

//home
Route::get('/', HomeController::class);

//champions
Route::get('champions', [ChampionController::class,'index']);
Route::get('champions/{nombre}',[ChampionController::class,'show']);
Route::get('champions/create',[ChampionController::class,'create']);

