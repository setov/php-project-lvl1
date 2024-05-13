<?php

namespace Brain\Games\Games\BrainPrime;

use function Brain\Games\Engine\run;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    }
    $stop = floor($num / 2);
    for ($i = 2; $i <= $stop; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrimeGame(): void
{
    $getData = function () {
        $question = rand(2, 278);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
