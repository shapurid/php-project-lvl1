<?php

namespace Brain\Games\Games\brainEven;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function game(): array
{
    $number = rand(1, 99);
    $answer = isEven($number) ? 'yes' : 'no';
    return [
        'question' => $number,
        'answer' => $answer
    ];
}
