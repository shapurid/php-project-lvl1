<?php

namespace Brain\Games\Games\brainEven;

use function Brain\Games\Engine\startEngine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGame(): array
{
    $number = rand(1, 99);
    $answer = isEven($number) ? 'yes' : 'no';
    return [
        'question' => $number,
        'answer' => $answer
    ];
}

function startBrainEven(): void
{
    $game = __NAMESPACE__ . '\\' . 'runGame';
    startEngine(DESCRIPTION, $game);
}
