<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::view('','welcome')->name('main-page');
Route::get('prime-numbers', [ExerciseController::class,'solvePrimeNumbers'])->name('prime-numbers');
Route::get('ascii-array', [ExerciseController::class,'solveAsciiArray'])->name('ascii-array');
Route::get('ascii-array-with-diff', [ExerciseController::class,'solveAsciiArrayWithArrayDiff'])->name('ascii-array-w-diff');
Route::get('tv-series', [ExerciseController::class,'solveTvSeries'])->name('tv-series');
