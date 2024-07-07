<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::group(['prefix' => 'estudiantes', 'middleware' => 'auth_docentes'], function () {
    Route::get('/', [EstudianteController::class, 'index'])->name('estudiante.index');
    Route::get('/show/{id}', [EstudianteController::class, 'show'])->name('estudiante.show');
    Route::get('/create', [EstudianteController::class, 'create'])->name('estudiante.create');
    Route::post('/create', [EstudianteController::class, 'store'])->name('estudiante.store');
    Route::get('/edit/{id}', [EstudianteController::class, 'edit'])->name('estudiante.edit');
    Route::post('/edit/{id}', [EstudianteController::class, 'update'])->name('estudiante.update');
    Route::get('/delete/{id}', [EstudianteController::class, 'delete'])->name('estudiante.delete');
    Route::post('/delete/{id}', [EstudianteController::class, 'destroy'])->name('estudiante.destroy');
});