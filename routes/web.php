<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', function ()
{
    return redirect('/animal');
});

Route::resource('animal', AnimalController::class)->only(['index', 'show', 'create', 'store']);

Route::get('via-cep/{cep}', [\App\Http\Controllers\ViaCepController::class, 'retornaEndereco']);
Route::get('/breeds-by-specie/{id}', [AnimalController::class, 'getBreedsBySpecie']);
