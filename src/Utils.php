<?php

namespace Php\Package\Utils;

function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}