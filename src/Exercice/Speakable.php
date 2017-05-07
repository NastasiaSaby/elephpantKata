<?php

namespace Source;

interface Speakable
{
    public function sayHello(?string $name): string;
}