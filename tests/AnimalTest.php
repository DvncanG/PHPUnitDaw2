<?php 

<<<<<<< HEAD:tests/AnimalTest.php
require_once('./clases/Animal.php');
=======
require_once('animal.php');
>>>>>>> 132343f0620c812922d9a089d251ebe6329c8fb7:vendor/phpunit/phpunit/tests/animalTest.php

class AnimalTest extends PHPUnit\Framework\TestCase {
    public function testSonido() {
        $animal = new Animal('', '', '', 11);
        $this->assertEquals($animal->sonido(), 'Guau');
    }
}
?>