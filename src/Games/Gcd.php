<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\run;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function getGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }
    return getGcd($b, $a % $b);
}

function runGcdGame(): void
{
    $getData = function () {
        $numberOne = random_int(1, 100);
        $numberTwo = random_int(1, 100);

        $question = "$numberOne $numberTwo";
        $correctAnswer = (string) getGcd($numberOne, $numberTwo);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
