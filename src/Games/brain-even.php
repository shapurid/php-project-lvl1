<?php

namespace Brain\Games\brainEven;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function game()
{
    $number = rand(1, 99);
    $answer = isEven($number) ? 'yes' : 'no';
    return [
        'question' => $number,
        'answer' => $answer
    ];
}
