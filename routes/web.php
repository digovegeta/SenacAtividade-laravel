<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbastecimentoController;


Route::get('/publications', [PublicationController::class, 'index'])->name('publication.index');
Route::get('/publication', [PublicationController::class, 'create'])->name('publication.create');
Route::post('/publication', [PublicationController::class, 'store'])->name('publication.store');
Route::get('/publications/{id}', [PublicationController::class, 'show'])->name('publication.show');
Route::delete('/publications/{id}', [PublicationController::class, 'destroy'])->name('publication.destroy');

Route::get('/abastecimentos', [AbastecimentoController::class, 'index'])->name('abastecimento.index');
Route::get('/abastecimento', [AbastecimentoController::class, 'create'])->name('abastecimento.create');
Route::post('/abastecimento', [AbastecimentoController::class, 'store'])->name('abastecimento.store');
Route::get('/abastecimentos/{id}', [AbastecimentoController::class, 'show'])->name('abastecimento.show');
Route::delete('/abastecimentos/{id}', [AbastecimentoController::class, 'destroy'])->name('abastecimento.destroy');
