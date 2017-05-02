<?php
declare(strict_types=1);

namespace Source;

class Hello
{
    public function sayHello(?string $name): string
    {
        if (is_null($name)) {
            return "Hello inconnu";
        }

        return sprintf("Hello %s", $name);
    }

}