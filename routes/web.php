<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::view('','welcome')->name('main-page');
Route::get('prime-numbers', [ExerciseController::class,'solvePrimeNumbers'])->name('prime-numbers');
