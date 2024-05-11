<?php

declare(strict_types=1);

namespace Brain\Games\BrainEven;

use function cli\line;
use function cli\prompt;

function is_Even(int $number): bool
{
    return $number % 2 === 0;
}

function brainEven(): void
{
    $prompt = 'May I have your name? ';
    $maxRounds = 3;
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';

    line('Welcome to the Brain Games!');
    $playerName = prompt($prompt, 'Friend');
    line("Hello, %s!", $playerName);
    line($question);
    for ($i = 0; $i < $maxRounds; $i++) {
        $number = random_int(1, 100);
        $correctAnswer = is_Even($number) ? 'yes' : 'no';
        line("Question: %s", $number);
        $playerAnswer = prompt('Your answer');

        if ($correctAnswer !== $playerAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $correctAnswer);
            line("Let's try again, %s!", $playerName);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $playerName);
}
