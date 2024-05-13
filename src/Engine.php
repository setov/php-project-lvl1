<?php

declare(strict_types=1);

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run(string $description, callable $questionAnswerData): void
{
    line("Welcome to Brain Games!");
    $name = prompt('May I have your name?', 'Friend');
    line("Hello, %s!", $name);
    line($description);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$currentQuestion, $correctAnswer] = $questionAnswerData();

        line("Question: %s", $currentQuestion);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("%s is wrong answer ;(. Correct answer was %s", $playerAnswer, $correctAnswer);
            line("Let's try again, %s", $name);
            return;
        }
    }
        line("Congratulations, %s!", $name);
}
