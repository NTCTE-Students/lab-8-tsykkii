<?php
class Thermostat {
    private $temperature;
    private $minTemp;
    private $maxTemp;

    public function __construct($initialTemp, $minTemp = 10, $maxTemp = 30) {
        $this->minTemp = $minTemp;
        $this->maxTemp = $maxTemp;
        $this->setTemperature($initialTemp);
    }

    public function setTemperature($temp) {
        if ($temp < $this->minTemp || $temp > $this->maxTemp) {
            echo "Ошибка: Температура должна быть в диапазоне {$this->minTemp} - {$this->maxTemp} градусов.\n";
            return;
        }
        $this->temperature = $temp;
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

$thermostat = new Thermostat(20);
echo "Текущая температура: " . $thermostat->getTemperature() . "°C\n";

$thermostat->setTemperature(25);
echo "Температура изменена: " . $thermostat->getTemperature() . "°C\n";

$thermostat->setTemperature(5);