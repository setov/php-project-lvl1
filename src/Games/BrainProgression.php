<?php

namespace Brain\Games\Games\BrainProgression;

use function Brain\Games\Engine\run;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_PROGRESSION = 10;

function getProgression(int $start, int $step, int $length): array
{
    $stop = ($length * $step + $start) - 1;
    $progression = range($start, $stop, $step);
    return $progression;
}

function runProgressionGame(): void
{
    $getData = function () {
        $startSequence = rand(1, 20);
        $stepSequence = rand(2, 9);

        $progression = getProgression($startSequence, $stepSequence, LENGTH_PROGRESSION);

        $randKey = array_rand($progression);
        $correctAnswer = (string)$progression[$randKey];

        $progression[$randKey] = '..';
        $question = implode(' ', $progression);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
