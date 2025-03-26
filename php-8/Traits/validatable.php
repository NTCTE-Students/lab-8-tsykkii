<?php
// Trait Validatable с методом validate
trait Validatable {
    // Метод для валидации данных
    public function validate() {
        // Проверка, что все необходимые поля присутствуют и не пустые
        foreach ($this->getRequiredFields() as $field) {
            if (empty($this->$field)) {
                return "Поле {$field} обязательно для заполнения.";
            }
        }

        // Если форма регистрации, проверяем корректность email
        if (isset($this->email) && !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Некорректный email.";
        }

        // Если форма регистрации, проверяем совпадение паролей
        if (isset($this->password) && isset($this->confirmPassword) && $this->password !== $this->confirmPassword) {
            return "Пароли не совпадают.";
        }

        return true;  // Все проверки пройдены
    }

    // Метод для получения обязательных полей
    abstract protected function getRequiredFields();
}

// Класс RegistrationForm
class RegistrationForm {
    use Validatable;

    public $username;
    public $email;
    public $password;
    public $confirmPassword;

    public function __construct($username, $email, $password, $confirmPassword) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    // Метод для получения обязательных полей для регистрации
    protected function getRequiredFields() {
        return ['username', 'email', 'password', 'confirmPassword'];
    }
}

// Класс LoginForm
class LoginForm {
    use Validatable;

    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    // Метод для получения обязательных полей для логина
    protected function getRequiredFields() {
        return ['username', 'password'];
    }
}

// Тестируем валидацию форм
$registrationForm = new RegistrationForm('JohnDoe', 'john@example.com', 'password123', 'password123');
$loginForm = new LoginForm('JohnDoe', 'password123');

// Проверка данных в форме регистрации
$registrationValidation = $registrationForm->validate();
if ($registrationValidation === true) {
    echo "Регистрация прошла успешно.<br>";
} else {
    echo "Ошибка в регистрации: {$registrationValidation}<br>";
}

// Проверка данных в форме логина
$loginValidation = $loginForm->validate();
if ($loginValidation === true) {
    echo "Логин прошел успешно.<br>";
} else {
    echo "Ошибка в логине: {$loginValidation}<br>";
}