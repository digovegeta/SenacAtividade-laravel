<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;


Route::get('/publications', [PublicationController::class, 'index'])->name('publication.index');
Route::get('/publication', [PublicationController::class, 'create'])->name('publication.create');
Route::post('/publication', [PublicationController::class, 'store'])->name('publication.store');
Route::get('/publications/{id}', [PublicationController::class, 'show'])->name('publication.show');
Route::delete('/publications/{id}', [PublicationController::class, 'destroy'])->name('publication.destroy');

