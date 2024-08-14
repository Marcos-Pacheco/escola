<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::prefix('direcao')->name('direcao.')->group(function () {
//     // controler direcao
// });
// Route::prefix('docente')->name('docente.')->group(function () {
//     // controler docente
// });
// Route::prefix('disciplina')->name('disciplina.')->group(function () {
//     // controler disciplina
// });
// Route::prefix('turma')->name('turma.')->group(function () {
//     // controler turma
// });

