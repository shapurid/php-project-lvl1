<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function greet(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', 'Anonymous');
    line('Hello, %s!', $name);
    return $name;
}
