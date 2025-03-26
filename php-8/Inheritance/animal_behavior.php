<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        return "{$this->name} кушает";
    }

    public function sleep() {
        return "{$this->name} спит";
    }
}

class Bird extends Animal {
    public function fly() {
        return "{$this->name} летает";
    }
}

class Fish extends Animal {
    public function swim() {
        return "{$this->name} плавает";
    }
}

class Mammal extends Animal {
    public function run() {
        return "{$this->name} бежит";
    }
}

// Создание объектов и тестирование
$eagle = new Bird("Орел");
$shark = new Fish("Акула");
$tiger = new Mammal("Тигр");

echo $eagle->eat() . PHP_EOL;
echo $eagle->fly() . PHP_EOL;
echo $shark->swim() . PHP_EOL;
echo $tiger->sleep() . PHP_EOL;
echo $tiger->run() . PHP_EOL;