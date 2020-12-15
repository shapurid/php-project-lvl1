<?php

namespace Brain\Games\brainProgression;

const DESCRIPTION = 'What number is missing in the progression?';

function game()
{
    $startOfProgression = rand(1, 99);
    $step = rand(2, 10);
    $lengthOfProgression = rand(5, 10);
    $emptyPartIndex = rand(5, $lengthOfProgression) - 1;
    $progression = [];
    $answer = 0;
    for ($i = 0; $i < $lengthOfProgression; $i += 1, $startOfProgression += $step) {
        if ($i === $emptyPartIndex) {
            $progression[] = '..';
            $answer = $startOfProgression;
        } else {
            $progression[] = $startOfProgression;
        }
    }
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}
