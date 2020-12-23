<?php

namespace Brain\Games\Games\brainCalc;

use Exception;

use function Brain\Games\Engine\startEngine;

const DESCRIPTION = 'What is the result of the expression?';
const AVAILABLE_OPERATORS = ['+', '-', '*'];

function calculate(string $operator, int $number1, int $number2): int
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            throw new Exception("Unknown operator: '{$operator}'!");
    }
}

function runGame(): array
{
    $number1 = rand(1, 99);
    $number2 = rand(1, 99);
    $randIndex = array_rand(AVAILABLE_OPERATORS);
    $operator = AVAILABLE_OPERATORS[$randIndex];
    $answer = calculate($operator, $number1, $number2);
    $question = "{$number1} {$operator} {$number2}";
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}

function startBrainCalc(): void
{
    $game = __NAMESPACE__ . '\\' . 'runGame';
    startEngine(DESCRIPTION, $game);
}
