<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->prefix('home')->name('home.')->group(function () {
    Route::get('/', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('index');
    Route::get('/direcao', [App\Http\Controllers\Web\HomeController::class, 'direcao'])->name('direcao');
    Route::get('/docente', [App\Http\Controllers\Web\HomeController::class, 'docente'])->name('docente');
    Route::get('/disciplina', [App\Http\Controllers\Web\HomeController::class, 'disciplina'])->name('disciplina');
    Route::get('/turma', [App\Http\Controllers\Web\HomeController::class, 'turma'])->name('turma');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
