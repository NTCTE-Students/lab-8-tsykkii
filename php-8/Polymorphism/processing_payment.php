<?php
// Базовый класс Order с методом calculateTotal
abstract class Order {
    protected $totalAmount;

    public function __construct($totalAmount) {
        $this->totalAmount = $totalAmount;
    }

    abstract public function calculateTotal();
}

// Класс OnlineOrder для онлайн-заказов
class OnlineOrder extends Order {
    public function calculateTotal() {
        // Онлайн-заказы имеют скидку 10% и налог 5%
        $discount = 0.10;
        $tax = 0.05;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

// Класс StoreOrder для заказов в магазине
class StoreOrder extends Order {
    public function calculateTotal() {
        // Заказы в магазине имеют скидку 5% и налог 8%
        $discount = 0.05;
        $tax = 0.08;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

// Класс TelephoneOrder для телефонных заказов
class TelephoneOrder extends Order {
    public function calculateTotal() {
        // Телефонные заказы имеют скидку 15% и налог 10%
        $discount = 0.15;
        $tax = 0.10;
        $totalAfterDiscount = $this->totalAmount * (1 - $discount);
        $totalAfterTax = $totalAfterDiscount * (1 + $tax);
        return $totalAfterTax;
    }
}

// Создаем объекты для каждого типа заказа
$onlineOrder = new OnlineOrder(100);
$storeOrder = new StoreOrder(100);
$telephoneOrder = new TelephoneOrder(100);

// Тестируем расчёт общей суммы с учетом скидок и налогов
echo "Общая сумма онлайн-заказа: " . $onlineOrder->calculateTotal() . "<br>";
echo "Общая сумма заказа в магазине: " . $storeOrder->calculateTotal() . "<br>";
echo "Общая сумма телефонного заказа: " . $telephoneOrder->calculateTotal() . "<br>";