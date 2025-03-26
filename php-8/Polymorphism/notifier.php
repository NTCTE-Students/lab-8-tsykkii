<?php
// Интерфейс Notifier с методом send
interface Notifier {
    public function send($message);
}

// Класс EmailNotifier для отправки email уведомлений
class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

// Класс SMSNotifier для отправки SMS уведомлений
class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

// Класс PushNotifier для отправки Push уведомлений
class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка Push уведомления: {$message}<br>");
    }
}

// Создаем объекты для каждого типа уведомлений
$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

// Тестируем отправку сообщений
$emailNotifier->send("Привет, это ваш email уведомление!");
$smsNotifier->send("Привет, это ваше SMS уведомление!");
$pushNotifier->send("Привет, это ваше Push уведомление!");