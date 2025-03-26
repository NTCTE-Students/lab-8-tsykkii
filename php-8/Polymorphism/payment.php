<?php
// Базовый класс Payment с методом process
abstract class Payment {
    abstract public function process();
}

// Класс CreditCardPayment для оплаты кредитной картой
class CreditCardPayment extends Payment {
    public function process() {
        print("Оплата с помощью кредитной карты.<br>");
    }
}

// Класс PayPalPayment для оплаты через PayPal
class PayPalPayment extends Payment {
    public function process() {
        print("Оплата через PayPal.<br>");
    }
}

// Класс BankTransferPayment для оплаты банковским переводом
class BankTransferPayment extends Payment {
    public function process() {
        print("Оплата банковским переводом.<br>");
    }
}

// Создаем объекты для каждого типа оплаты
$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();
$bankTransferPayment = new BankTransferPayment();

// Тестируем процесс оплаты
$creditCardPayment->process();
$payPalPayment->process();
$bankTransferPayment->process();
?>