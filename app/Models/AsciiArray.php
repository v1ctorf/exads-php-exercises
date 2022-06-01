<?php

namespace App\Models;

class AsciiArray
{
    const ASCII_CODE_COMMA = 44;
    const ASCII_CODE_PIPE = 124;

    public $content;

    public function __construct()
    {
        $arrayContent = array_map(function ($charCode) {
            return chr($charCode);
        }, range(self::ASCII_CODE_COMMA,self::ASCII_CODE_PIPE));

        shuffle($arrayContent);

        $this->content = $arrayContent;
    }


    public function getString()
    {
        return join('',$this->content);
    }


    public function discardRandomElement()
    {
        $length = count($this->content);
        $key = rand(0, $length - 1);
        unset($this->content[$key]);

        return count($this->content) < $length;
    }
}
