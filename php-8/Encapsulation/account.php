<?php
class User {
    private $username;
    private $passwordHash; // Храним хеш пароля

    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPassword($password); // Сразу хешируем пароль при создании
    }

    public function setPassword($password) {
        if (strlen($password) < 6) {
            echo "Пароль должен содержать не менее 6 символов.\n";
            return;
        }
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }

    public function getUsername() {
        return $this->username;
    }
}

// Пример использования:
$user = new User("JohnDoe", "securePass123");

// Проверяем пароль
if ($user->checkPassword("securePass123")) {
    echo "Пароль верный!\n";
} else {
    echo "Неверный пароль!\n";
}

// Изменяем пароль
$user->setPassword("newPass456");

if ($user->checkPassword("newPass456")) {
    echo "Новый пароль верный!\n";
} else {
    echo "Неверный пароль!\n";
}