<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::prefix('locacao')->name('locacao.')->group(function () {
//     Route::get('/', [App\Http\Controllers\gfac\VeiculoLocacaoController::class, 'index'])->name('index');
//     Route::post('/', [App\Http\Controllers\gfac\VeiculoLocacaoController::class, 'store'])->name('store');
//     Route::delete('/{locacao_id}/delete', [App\Http\Controllers\gfac\VeiculoLocacaoController::class, 'destroy'])->name('delete');
// });

