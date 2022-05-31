<?php

namespace App\Http\Controllers;

class ExerciseController extends Controller
{
    public function solvePrimeNumbers()
    {
        $numbers = [];

        foreach (range(1,100) as $number) {
            $multipleOf = [];

            foreach (range(2, $number) as $value) {
                if ($number % $value == 0 && $number != $value) {
                    $multipleOf[] = $value;
                }
            }

            $numbers[] = $multipleOf;
        }

        return view('prime-numbers', compact('numbers'));
    }
}
