<?php
class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "{$this->name} зарабатывает \${$this->salary} в месяц.";
    }
}

class Manager extends Employee {
    public $teamSize;

    public function __construct($name, $salary, $teamSize) {
        parent::__construct($name, $salary);
        $this->teamSize = $teamSize;
    }

    public function manageTeam() {
        return "{$this->name} управляет командой из {$this->teamSize} людей.";
    }
}

class Developer extends Employee {
    public $programmingLanguage;

    public function __construct($name, $salary, $programmingLanguage) {
        parent::__construct($name, $salary);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function writeCode() {
        return "{$this->name} пишет код в {$this->programmingLanguage}.";
    }
}

class Designer extends Employee {
    public $designTool;

    public function __construct($name, $salary, $designTool) {
        parent::__construct($name, $salary);
        $this->designTool = $designTool;
    }

    public function createDesign() {
        return "{$this->name} создает дизайны используя {$this->designTool}.";
    }
}

// Создание объектов и тестирование
$manager = new Manager("Artem", 5000, 10);
$developer = new Developer("Nikita", 4000, "PHP");
$designer = new Designer("Slava", 3500, "Adobe Photoshop");

echo $manager->getInfo() . PHP_EOL;
echo $manager->manageTeam() . PHP_EOL;
echo $developer->getInfo() . PHP_EOL;
echo $developer->writeCode() . PHP_EOL;
echo $designer->getInfo() . PHP_EOL;
echo $designer->createDesign() . PHP_EOL;