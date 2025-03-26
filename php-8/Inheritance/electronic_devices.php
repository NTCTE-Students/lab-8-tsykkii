<?php
class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "{$this->brand} {$this->model}";
    }
}

class Smartphone extends Device {
    public $simCount;

    public function __construct($brand, $model, $simCount) {
        parent::__construct($brand, $model);
        $this->simCount = $simCount;
    }

    public function call($number) {
        return "Calling {$number} from {$this->getInfo()}...";
    }
}

class Laptop extends Device {
    public $ram;

    public function __construct($brand, $model, $ram) {
        parent::__construct($brand, $model);
        $this->ram = $ram;
    }

    public function compileCode() {
        return "{$this->getInfo()} is compiling code with {$this->ram}GB RAM.";
    }
}

class Tablet extends Device {
    public $screenSize;

    public function __construct($brand, $model, $screenSize) {
        parent::__construct($brand, $model);
        $this->screenSize = $screenSize;
    }

    public function watchVideo($videoTitle) {
        return "Watching \"{$videoTitle}\" on {$this->getInfo()} with a {$this->screenSize}-inch screen.";
    }
}

// Создание объектов и тестирование
$phone = new Smartphone("Samsung", "Galaxy S21", 2);
$laptop = new Laptop("Apple", "MacBook Pro", 16);
$tablet = new Tablet("Microsoft", "Surface Pro", 12.3);

echo $phone->getInfo() . PHP_EOL;
echo $phone->call("+123456789") . PHP_EOL;
echo $laptop->compileCode() . PHP_EOL;
echo $tablet->watchVideo("PHP OOP Tutorial") . PHP_EOL;