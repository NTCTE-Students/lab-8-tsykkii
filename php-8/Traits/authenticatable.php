<?php
// Trait Authenticatable с методами login() и logout()
trait Authenticatable {
    private $isAuthenticated = false;

    // Метод для авторизации пользователя
    public function login($username, $password) {
        // Пример проверки пользователя (здесь можно использовать данные из базы данных)
        if ($username === 'admin' && $password === 'password123') {
            $this->isAuthenticated = true;
            echo "Пользователь {$username} успешно авторизован.<br>";
        } else {
            echo "Ошибка авторизации: Неверный логин или пароль.<br>";
        }
    }

    // Метод для выхода из системы
    public function logout() {
        if ($this->isAuthenticated) {
            $this->isAuthenticated = false;
            echo "Пользователь вышел из системы.<br>";
        } else {
            echo "Пользователь не авторизован.<br>";
        }
    }

    // Метод для проверки, авторизован ли пользователь
    public function isAuthenticated() {
        return $this->isAuthenticated;
    }
}

// Класс User, использующий Trait Authenticatable
class User {
    use Authenticatable;

    public $username;

    public function __construct($username) {
        $this->username = $username;
    }
}

// Тестируем авторизацию и выход из системы
$user = new User('admin');

// Попытка авторизации
$user->login('admin', 'password123');  // Успешная авторизация
echo $user->isAuthenticated() ? 'Пользователь авторизован.<br>' : 'Пользователь не авторизован.<br>';

echo "<br>";

// Попытка выхода
$user->logout();  // Выход из системы
echo $user->isAuthenticated() ? 'Пользователь авторизован.<br>' : 'Пользователь не авторизован.<br>';

echo "<br>";

// Повторная попытка авторизации с неверным паролем
$user->login('admin', 'wrongpassword');  // Неудачная авторизация