# Elephpant Kata

Vous avez devant vous un squelette de projet en PHP.

Vous avez 2 classes de tests et des classes correspondant aux sources.

Un premier test vous montre comment faire un "hello world" en PHP.

Vous disposez de phpunit dans bin/phpunit pour lancer vos tests.

Vous disposez aussi de composer dans bin/composer.phar.

<h2>Commandes utiles</h2>

Pour lancer les tests : 

```
bin/phpunit
```

Quand on ajoute une classe, pour lancer l'autoload : 

```
bin/composer.phar dump-autoload
```

## Règles du FizzBuzz
Ecrire un programme qui retourne les nombres de 1 à 100. Mais pour les multiples de 3, retourner "Fizz" et pour les multiples de 5, retourner "Buzz". Pour les nombres qui sont à la fois multiples de 3 et 5, retourner "FizzBuzz".

## Des liens utiles

* [Documentation PHP](https://secure.php.net/docs.php)
* [Objects calisthenics](http://williamdurand.fr/2013/06/03/object-calisthenics/)
* [Documentation PHPUnit](https://phpunit.de/manual/current/en/index.html)

## Quelques trucs 
Boucle for :

```
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```

If/else :

```
if ($a > $b) {
    echo "a est plus grand que b";
} elseif ($a == $b) {
    echo "a est égal à b";
} else {
    echo "a est plus petit que b";
}
```

Array en PHP :

```
 $a = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
    print_r($a);
```
