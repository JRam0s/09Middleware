<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Mid;

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
    return view('templates.middleware');
})->name('home');

Route::get('/negado', function () {
    return view('permissoes.denied');
})->name('negado');

Route::resource('alunos', 'AlunosController')->middleware('PermissionMiddleware');
Route::resource('cursos', 'CursosController')->middleware('PermissionMiddleware');
Route::resource('disciplinas', 'DisciplinasController')->middleware('PermissionMiddleware');
Route::resource('professores', 'ProfessoresController')->middleware('PermissionMiddleware');
Route::resource('eixos', 'EixosController')->middleware('PermissionMiddleware');