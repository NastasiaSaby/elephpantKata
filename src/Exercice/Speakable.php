<?php

namespace Source;

/**
 * Interface Speakable
 * @package Source
 */
interface Speakable
{
    /**
     * @param null|string $name
     * @return string
     */
    public function sayHello(?string $name): string;
}