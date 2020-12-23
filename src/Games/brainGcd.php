<?php

namespace Brain\Games\Games\brainGcd;

use function Brain\Games\Engine\startEngine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    return $b ? gcd($b, $a % $b) : $a;
}

function runGame(): array
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

function startBrainGcd()
{
    $game = __NAMESPACE__ . '\\' . 'runGame';
    return startEngine(DESCRIPTION, $game);
}
