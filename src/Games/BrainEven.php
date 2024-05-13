<?php

namespace Brain\Games\Games\BrainEven;

use function Brain\Games\Engine\run;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
const MIN = 1;
const MAX = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runEvenGame(): void
{
      $getData = function () {
        $question = random_int(MIN, MAX);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
      };

    run(DESCRIPTION, $getData);
}
