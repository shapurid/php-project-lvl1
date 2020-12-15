<?php

namespace Brain\Games\Engine;

use Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_QUESTIONS = 3;

function engine($description, $game)
{
    $name = Cli\greet();
    line($description);
    for ($i = 1; $i <= NUMBER_OF_QUESTIONS; $i += 1) {
        ['answer' => $answer, 'question' => $question] = $game();
        $answerOfUser = prompt($question);
        if ($answerOfUser === $answer) {
            line('Correct!');
        } else {
            line('"%s" is wrong answer!', $answerOfUser);
            line("Let's try again %s", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
    return;
}
