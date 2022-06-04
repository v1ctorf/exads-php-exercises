<?php

namespace App\Http\Controllers;

use App\Models\AsciiArray;

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


    public function solveAsciiArray()
    {
        $arrayChars = new AsciiArray();
        // class AsciiArray is at app/Models/AsciiArray.php
        $arrayChars->shuffleElements();
        $arrayChars->discardRandomElement();
        $completeArray = new AsciiArray();

        $ts = microtime(true);
        $arrayMap = [];

        foreach ($completeArray->content as $char) {
            $arrayMap[ord($char)] = 1;
        }

        foreach ($arrayChars->content as $char) {
            unset($arrayMap[ord($char)]);
        }

        $missingCharacter = chr(array_keys($arrayMap)[0]);
        $runtime = number_format(microtime(true) - $ts, 6);

        return view('ascii-array',compact(['arrayChars','missingCharacter','runtime']));
    }
    

    public function solveAsciiArrayWithArrayDiff()
    {
        $arrayChars = new AsciiArray();
        // class AsciiArray is at app/Models/AsciiArray.php
        $arrayChars->shuffleElements();
        $arrayChars->discardRandomElement();
        $completeArray = new AsciiArray();

        $ts = microtime(true);
        $difference = array_diff($completeArray->content, $arrayChars->content);
        $missingCharacter = join('',$difference);
        $runtime = number_format(microtime(true) - $ts, 6);

        return view('ascii-array-diff',compact(['arrayChars','missingCharacter','runtime']));
    }


    public function solveTvSeries()
    {
        // SQL scripts at resources/views/tv-series.blade.php
        return view('tv-series');
    }
}
