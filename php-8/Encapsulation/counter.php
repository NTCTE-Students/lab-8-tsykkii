<?php
class Counter {
    private $count;

    public function __construct($initialCount = 0) {
        $this->count = max(0, $initialCount); // Гарантируем, что счётчик не будет отрицательным
    }

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        } else {
            echo "Ошибка: Счетчик не может быть меньше 0.\n";
        }
    }

    public function getCount() {
        return $this->count;
    }
}

$counter = new Counter();

$counter->increment();
echo "Счетчик: " . $counter->getCount() . "\n";

$counter->decrement();
echo "Счетчик: " . $counter->getCount() . "\n";

$counter->decrement();