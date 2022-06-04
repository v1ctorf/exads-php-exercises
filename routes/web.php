<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::view('','welcome')->name('main-page');

Route::controller(ExerciseController::class)->group(function(){    
    Route::get('prime-numbers', 'solvePrimeNumbers')->name('prime-numbers');
    Route::get('ascii-array','solveAsciiArray')->name('ascii-array');
    Route::get('ascii-array-with-diff', 'solveAsciiArrayWithArrayDiff')->name('ascii-array-w-diff');
    Route::get('tv-series', 'solveTvSeries')->name('tv-series');
    Route::get('ab-testing','solveAbTesting')->name('ab-testing');    
    Route::get('promotion/{promoId}','getPromotion')->name('promotion');    
});
