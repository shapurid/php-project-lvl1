<?php

namespace Brain\Games\Games\brainCalc;

use Exception;

const DESCRIPTION = 'What is the result of the expression?';

function calculate($operator, $number1, $number2)
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

function game(): array
{
    $number1 = rand(1, 99);
    $number2 = rand(1, 99);
    $availableOperators = ['+', '-', '*'];
    $operator = $availableOperators[array_rand($availableOperators, 1)];
    $answer = calculate($operator, $number1, $number2);
    $question = "{$number1} {$operator} {$number2}";
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}
