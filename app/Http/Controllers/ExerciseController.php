<?php

namespace App\Http\Controllers;

use App\Models\AsciiArray;

class ExerciseController extends Controller
{
    const ASCII_CODE_COMMA = 44;
    const ASCII_CODE_PIPE = 124;

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
        $arrayChars->shuffleElements();
        $arrayChars->discardRandomElement();
        $completeArray = new AsciiArray();

        $arrayMap = [];

        foreach ($completeArray->content as $char) {
            $arrayMap[ord($char)] = 1;
        }

        foreach ($arrayChars->content as $char) {
            unset($arrayMap[ord($char)]);
        }

        $missingCharacter = chr(array_keys($arrayMap)[0]);
        $incompleteString = $arrayChars->getString();

        return view('ascii-array',compact(['incompleteString','missingCharacter']));
    }


    public function solveAsciiArrayWithArrayDiff()
    {
        $arrayChars = new AsciiArray();
        $arrayChars->shuffleElements();
        $arrayChars->discardRandomElement();
        $completeArray = new AsciiArray();

        $difference = array_diff($completeArray->content, $arrayChars->content);

        $missingCharacter = join('',$difference);
        $incompleteString = $arrayChars->getString();

        return view('ascii-array-diff',compact(['incompleteString','missingCharacter']));
    }
}
