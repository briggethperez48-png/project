<?php
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EncuestaController;
use Illuminate\Support\Facades\Route;

/*
|
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

    //Vista de formularios
Route::resource('/formulario', RegistroController::class);
Route::post('/formulario/create/fetch', [registroController::class, 'fetch'])->name('registroController.fetch');

Route::post('/formulario/asistencia', [AsistenciaController::class, 'store'])
    ->name('asistencia.store')
    ->middleware('auth');
Route::get('/registroasistencia',[AsistenciaController::class,'index'])
    ->middleware('auth');

Route::post('/formulario/encuesta', [EncuestaController::class, 'store'])
    ->name('encuesta.store')
    ->middleware('auth');
Route::get('/encuesta', function () {
    return view('formulario.encuesta');
})->middleware('auth');


    //Vistas estáticas => Esta OK
Route::prefix('content')->group(function () {
    Route::view('/', 'contenido/index');

    Route::view('/contactos', 'contenido/contactos');
    Route::view('/memorias', 'contenido/memorias');
    Route::view('/objetivos', 'contenido/objetivos');
    Route::view('/ponentes', 'contenido/ponentes');
    Route::view('/preguntas', 'contenido/preguntas');
    Route::view('/programa', 'contenido/programa');

    Route::view('/read', 'contenido/read')->middleware('auth');
});

    //Autenticación
require __DIR__.'/auth.php';
