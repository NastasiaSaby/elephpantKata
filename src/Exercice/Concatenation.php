<?php

namespace Source;

/**
 * Class Concatenation
 * @package Source
 */
trait Concatenation
{
    /**
     * @param string $part1
     * @param string $part2
     * @return string
     */
    public function concatenate(string $part1, string $part2): string
    {
        return sprintf('%s %s', $part1, $part2);
    }
}