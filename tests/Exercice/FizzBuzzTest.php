<?php
declare(strict_types=1);

namespace Tests;

use Source\FizzBuzz;

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function shouldFizzBuzzClassExists(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertNotNull($fizzBuzz);
    }
}