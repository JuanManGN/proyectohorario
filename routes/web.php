<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SemaforoController;
use App\Http\Controllers\TipoFormacionController;


Route::controller(PageController::class)->group(function()
{
    //-----------------------------------
    route::get('/','login')->name('login');
    route::get('/principal','pagina_principal')->name('pagina_principal');
    route::get('/principal/calendario','calendario')->name('calendario');

});

/*Ambientes*/
Route::controller(AmbienteController::class)->group(function()
{
    route::get('/principal/ambiente','index')->name('ambientes');

    Route::match(['get','post'],'/principal/ambiente/crear','create')->name('create_ambiente');

    Route::match(['get','post'],'/principal/ambiente/guardar','store')->name('guardar_ambiente');
});

/*Area tematica*/
Route::controller(AreaController::class)->group(function()
{
    route::get('/principal/area','index')->name('areas');

    Route::match(['get','post'],'/principal/area/crear','create')->name('create_area');

    Route::match(['get','post'],'/principal/area/guardar','store')->name('guardar_area');
});

/*Competencias*/
Route::controller(CompetenciaController::class)->group(function()
{
    route::get('/principal/competencia','index')->name('competencias');

    Route::match(['get','post'],'/principal/competencia/crear','create')->name('create_competencia');

    Route::match(['get','post'],'/principal/competencia/guardar','store')->name('guardar_competencia');
});

/*Fichas*/
Route::controller(FichaController::class)->group(function()
{
    route::get('/principal/fichas','index')->name('fichas');

    Route::match(['get','post'],'/principal/fichas/crear','create')->name('create_fichas');

    Route::match(['get','post'],'/principal/fichas/guardar','store')->name('guardar_fichas');
});

/*Instructores*/
Route::controller(InstructorController::class)->group(function()
{
    route::get('/principal/instructores','index')->name('instructores');

    Route::match(['get','post'],'/principal/instructores/crear','create')->name('create_instructor');

    Route::match(['get','post'],'/principal/instructores/guardar','store')->name('guardar_instructor');
});

/*Programa*/
Route::controller(ProgramaController::class)->group(function()
{
    route::get('/principal/programas','index')->name('programas');

    Route::match(['get','post'],'/principal/programas/crear','create')->name('create_programa');

    Route::match(['get','post'],'/principal/programas/guardar','store')->name('guardar_programa');
});

/*Red tematica*/
Route::controller(RedController::class)->group(function()
{
    route::get('/principal/redes','index')->name('redes');

    Route::match(['get','post'],'/principal/redes/crear','create')->name('create_red');

    Route::match(['get','post'],'/principal/redes/guardar','store')->name('guardar_red');
});

/*Resultados*/
Route::controller(ResultadoController::class)->group(function()
{
    route::get('/principal/resultados','index')->name('resultados');

    Route::match(['get','post'],'/principal/resultados/crear','create')->name('create_resultados');

    Route::match(['get','post'],'/principal/resultados/guardar','store')->name('guardar_resultados');
});

/*Sedes*/
Route::controller(SedeController::class)->group(function()
{
    Route::get('/principal/sedes','index')->name('sedes');
    
    Route::match(['get', 'post'],'/principal/sedes/crear','create')->name('create');
    
    Route::match(['get', 'post'],'/principal/sedes/guardar', 'store')->name('guardar_sedes');
    
});

/*Semaforo*/
Route::controller(SemaforoController::class)->group(function()
{
    route::get('/principal/semaforo','indexsemaforo')->name('semaforos');

    Route::match(['get','post'],'/principal/semaforo/crear','crearsemaforo')->name('crear_semaforo');

    Route::match(['get','post'],'/principal/semaforo/guardar','store')->name('guardar_semaforo');
});

/*Tipos de formacion*/
Route::controller(TipoFormacionController::class)->group(function()
{
    route::get('/principal/tipo','index')->name('tipos');

    Route::match(['get','post'],'/principal/tipo/crear','create')->name('create_tip');

    Route::match(['get','post'],'/principal/tipo/guardar','store')->name('guardar_tipo');
});

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('dashboard', 'principal/calendario')->name('dashboard');
Route::get('/', function () {
    return view('/auth/login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
