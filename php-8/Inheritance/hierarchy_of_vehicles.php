<?php
class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getInfo() {
        return parent::getInfo() . "с {$this->doors} дверьми";
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function getInfo() {
        return parent::getInfo() . " ({$this->type} мотоцикл)";
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        return parent::getInfo() . " грузоподъемностью {$this->loadCapacity} тонн";
    }
}

// Создание объектов и тестирование
$car = new Car("Toyota", "Corolla", 2020, 4);
$bike = new Bike("Yamaha", "YZF-R3", 2021, "sport");
$truck = new Truck("Volvo", "FH16", 2019, 20);

echo $car->getInfo() . PHP_EOL;
echo $bike->getInfo() . PHP_EOL;
echo $truck->getInfo() . PHP_EOL;