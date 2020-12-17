<?php

namespace Brain\Games\Games\brainProgression;

const DESCRIPTION = 'What number is missing in the progression?';

function game(): array
{
    $start = rand(1, 99);
    $step = rand(2, 10);
    $length = rand(5, 10);
    $emptyPartIndex = rand(5, $length) - 1;
    $progression = [];
    $answer = 0;
    for ($i = 0; $i < $length; $i += 1, $start += $step) {
        if ($i === $emptyPartIndex) {
            $progression[] = '..';
            $answer = $start;
        } else {
            $progression[] = $start;
        }
    }
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}
