<?php

namespace Brain\Games\brainCalc;

const DESCRIPTION = 'What is the result of the expression?';

function game(): array
{
    $number1 = rand(1, 99);
    $number2 = rand(1, 99);
    $charsOfExpression = ['+', '-', '*'];
    $char = $charsOfExpression[array_rand($charsOfExpression, 1)];
    $question = '';
    $answer = 0;
    switch ($char) {
        case '+':
            $question = "{$number1} + {$number2}";
            $answer = $number1 + $number2;
            break;
        case '-':
            $question = "{$number1} - {$number2}";
            $answer = $number1 - $number2;
            break;
        default:
            $question = "{$number1} * {$number2}";
            $answer = $number1 * $number2;
            break;
    }
    return [
        'question' => $question,
        'answer' => (string)$answer
    ];
}
