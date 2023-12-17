<?php
use App\Http\Controllers\AlumnosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AlumnosController::class, 'index'])->name('alumno.index');
Route::get('/create', [AlumnosController::class, 'create'])->name('alumno.create');
//Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/store', [AlumnosController::class, 'store'])->name('alumno.store');
Route::post('/edit/{id}', [AlumnosController::class, 'edit'])->name('alumno.edit');
Route::post('/update/{id}', [AlumnosController::class, 'update'])->name('alumno.update');
Route::delete('/destroy/{id}', [AlumnosController::class, 'destroy'])->name('alumno.destroy');


