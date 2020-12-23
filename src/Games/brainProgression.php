<?php

namespace Brain\Games\Games\brainProgression;

use function Brain\Games\Engine\startEngine;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN_PROGRESSION_LENGTH = 5;
const MAX_PROGRESSION_LENGTH = 10;

function formProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i += 1, $start += $step) {
        $progression[] = $start;
    }
    return $progression;
}

function runGame(): array
{
    $start = rand(1, 99);
    $step = rand(2, 10);
    $length = rand(MIN_PROGRESSION_LENGTH, MAX_PROGRESSION_LENGTH);
    $progression = formProgression($start, $step, $length);
    $emptyPartIndex = array_rand($progression);
    $answer = $progression[$emptyPartIndex];
    $progression[$emptyPartIndex] = '..';
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}

function startBrainProgression(): void
{
    $game = __NAMESPACE__ . '\\' . 'runGame';
    startEngine(DESCRIPTION, $game);
}
