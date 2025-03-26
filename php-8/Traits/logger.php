<?php
// Trait Logger с методом log
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

// Класс User
class User {
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        // Логика обновления пользователя
        $this->log("Пользователь {$name} обновлен.");
    }
}

// Класс Order
class Order {
    use Logger;

    public function createOrder($orderId) {
        // Логика создания заказа
        $this->log("Заказ с ID {$orderId} создан.");
    }

    public function updateOrder($orderId) {
        // Логика обновления заказа
        $this->log("Заказ с ID {$orderId} обновлен.");
    }
}

// Класс Product
class Product {
    use Logger;

    public function createProduct($productName) {
        // Логика создания продукта
        $this->log("Продукт {$productName} создан.");
    }

    public function updateProduct($productName) {
        // Логика обновления продукта
        $this->log("Продукт {$productName} обновлен.");
    }
}

// Тестируем создание и обновление объектов
$user = new User();
$user->createUser("Иван");
$user->updateUser("Иван");

$order = new Order();
$order->createOrder(1001);
$order->updateOrder(1001);

$product = new Product();
$product->createProduct("Телевизор");
$product->updateProduct("Телевизор");