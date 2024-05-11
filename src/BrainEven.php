<?php

declare(strict_types=1);

namespace Brain\Games\BrainEven;

function is_Even(int $number): bool
{
    return $number % 2 === 0;
}
