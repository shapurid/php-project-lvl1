<?php

namespace Brain\Games\Games\brainPrime;

use function Brain\Games\Engine\startEngine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $stopChecking = $number / 2;
    for ($i = 2; $i <= $stopChecking; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame(): array
{
    $number = rand(2, 101);
    $answer = isPrime($number) ? 'yes' : 'no';
    return [
        'question' => $number,
        'answer' => $answer
    ];
}

function startBrainPrime(): void
{
    $game = __NAMESPACE__ . '\\' . 'runGame';
    startEngine(DESCRIPTION, $game);
}
