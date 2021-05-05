<?php

use App\Http\Controllers\ConsultoriaController;

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

Route::get('/', [ConsultoriaController::class, 'index']);
Route::get('/deputados/{iIdFichaCadastralParlamentar?}', [ConsultoriaController::class, 'viewCadastroParlamentar']);
Route::get('/senadores/{iIdFichaCadastralParlamentar?}', [ConsultoriaController::class, 'viewCadastroParlamentar']);



