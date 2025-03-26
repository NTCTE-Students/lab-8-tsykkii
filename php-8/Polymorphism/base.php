<?php
// Интерфейс Database с методами connect() и query()
interface Database {
    public function connect();
    public function query($sql);
}

// Класс MySQLDatabase для работы с MySQL
class MySQLDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных MySQL.<br>");
    }

    public function query($sql) {
        print("Запрос MySQL: {$sql}<br>");
    }
}

// Класс PostgreSQLDatabase для работы с PostgreSQL
class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных PostgreSQL.<br>");
    }

    public function query($sql) {
        print("Запрос PostgreSQL: {$sql}<br>");
    }
}

// Класс SQLiteDatabase для работы с SQLite
class SQLiteDatabase implements Database {
    public function connect() {
        print("Подключение к базе данных SQLite.<br>");
    }

    public function query($sql) {
        print("Запрос SQLite: {$sql}<br>");
    }
}

// Создаем объекты для каждой базы данных
$mysqlDatabase = new MySQLDatabase();
$postgresqlDatabase = new PostgreSQLDatabase();
$sqliteDatabase = new SQLiteDatabase();

// Тестируем подключение и запросы
$mysqlDatabase->connect();
$mysqlDatabase->query("SELECT * FROM users");

$postgresqlDatabase->connect();
$postgresqlDatabase->query("SELECT * FROM products");

$sqliteDatabase->connect();
$sqliteDatabase->query("SELECT * FROM orders");