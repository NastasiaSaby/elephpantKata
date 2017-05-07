<?php

namespace Source;

trait Concatenation
{
    public function concatenate(string $part1, string $part2): string
    {
        return sprintf('%s %s', $part1, $part2);
    }
}