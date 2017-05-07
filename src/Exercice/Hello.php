<?php
declare(strict_types=1);

namespace Source;

class Hello implements Speakable
{
    //Utilisation d'un trait pour palier l'absence d'héritage multiple
    use Concatenation;

    /**
     * @param null|string $name
     * @return string
     */
    public function sayHello(?string $name): string
    {
        if (is_null($name)) {
            return "Hello inconnu";
        }

        //Utilisation de la méthode "concatenate" du trait "Concatenation"
        return $this->concatenate("Hello", $name);
    }

}