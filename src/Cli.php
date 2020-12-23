<?php

namespace Brain\Games\Cli;

use function Brain\Games\Games\brainCalc\startBrainCalc;
use function Brain\Games\Games\brainEven\startBrainEven;
use function Brain\Games\Games\brainGcd\startBrainGcd;
use function Brain\Games\Games\brainPrime\startBrainPrime;
use function Brain\Games\Games\brainProgression\startBrainProgression;
use function cli\line;
use function cli\prompt;

function startMenu(): void
{
    $listOfGames = <<<EOT
    List of games:
        1. Brain Calc
        2. Brain Even
        3. Brain GCD
        4. Brain Prime
        5. Brain Progression
        0. Exit
    EOT;
    // line('Please choose a game.');
    line($listOfGames);
    $numberOfGame = (int)prompt('Please, enter a number of game');
    switch ($numberOfGame) {
        case 1:
            startBrainCalc();
            break;
        case 2:
            startBrainEven();
            break;
        case 3:
            startBrainGcd();
            break;
        case 4:
            startBrainPrime();
            break;
        case 5:
            startBrainProgression();
            break;
        case 0:
            break;
        default:
            line('No such option. Choose again, please.');
            startMenu();
            break;
    }
    return;
}
