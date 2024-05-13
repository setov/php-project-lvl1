<?php

declare(strict_types=1);

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function greeting(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name? ', 'User');
    line("Hello, %s!", $name);
}
