<?php
declare(strict_types=1);

namespace Tests;

use Source\Hello;

use PHPUnit\Framework\TestCase;

final class HelloTest extends TestCase
{
    /**
     * @test
     */
    public function shouldSayHelloToUnknown(): void
    {
        $hello = new Hello();
        $this->assertEquals("Hello inconnu", $hello->sayHello(null));
    }

    /**
     * @test
     */
    public function shouldSayHelloToMarie(): void
    {
        $hello = new Hello();
        $this->assertEquals("Hello Marie", $hello->sayHello("Marie"));
    }
}