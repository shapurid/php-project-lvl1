<?php

namespace Brain\Games\brainGcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    return $b ? gcd($b, $a % $b) : $a;
}

function game()
{
    $number1 = rand(1, 50);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    $answer = gcd($number1, $number2);
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}
