<?php

namespace Brain\Games\Games\Calc;

use function Brain\Games\Engine\run;

const DESCRIPTION = "What is the result of the expression?";

function getQuestion(int $operandOne, int $operandTwo, string $operation): string
{
    return "{$operandOne} {$operation} {$operandTwo}";
}

/**
* Performs the specified arithmetic operation and returns an array containing
* the result and the corresponding expression in form [$question, $answer].
*
* @param string $operation The arithmetic operation to perform
* @return string[]
*/
function performArithmeticOperation(string $operation): array
{
    switch ($operation) {
        case '-':
            $operandTwo = random_int(1, 100);
            $operandOne = random_int($operandTwo, 100);
            $answer = $operandOne - $operandTwo;
            $question = getQuestion($operandOne, $operandTwo, $operation);
            return [$question, (string) $answer];
        case '*':
            $operandOne = random_int(2, 9);
            $operandTwo = random_int(2, 9);
            $answer = $operandOne * $operandTwo;
            $question = getQuestion($operandOne, $operandTwo, $operation);
            return [$question, (string) $answer];
        case '+':
            $operandOne = random_int(1, 100);
            $operandTwo = random_int(1, 100);
            $answer = $operandOne + $operandTwo;
            $question = getQuestion($operandOne, $operandTwo, $operation);
            return [$question, (string) $answer];
        default:
            throw new \InvalidArgumentException('Invalid operation provided: ' . $operation);
    }
}


function brainCalc(): void
{
    $generateArithmeticOperationData = function () {
        $operations = ["-", "+", "*"];
        $index = array_rand($operations);
        $operation = $operations[$index];
        [$question, $answer] = performArithmeticOperation($operation);
        return [ $question, $answer];
    };
    run(DESCRIPTION, $generateArithmeticOperationData);
}
