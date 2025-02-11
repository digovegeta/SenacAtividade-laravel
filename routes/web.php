<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbastecimentoController;
use App\Http\Controllers\VeiculoController;


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

Route::get('/veiculos', [VeiculoController::class, 'index'])->name('veiculo.index');
Route::get('/veiculo', [VeiculoController::class, 'create'])->name('veiculo.create');
Route::post('/veiculo', [VeiculoController::class, 'store'])->name('veiculo.store');
Route::get('/veiculos/{id}', [VeiculoController::class, 'show'])->name('veiculo.show');
Route::delete('/veiculos/{id}', [VeiculoController::class, 'destroy'])->name('veiculo.destroy');
