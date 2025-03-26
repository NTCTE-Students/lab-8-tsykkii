<?php
// Trait Timestampable с методами для работы с временными метками
trait Timestampable {
    protected $createdAt;
    protected $updatedAt;

    // Метод для установки даты создания
    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    // Метод для получения даты создания
    public function getCreatedAt() {
        return $this->createdAt;
    }

    // Метод для установки даты обновления
    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    // Метод для получения даты обновления
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

// Класс Post
class Post {
    use Timestampable;

    public function createPost() {
        // Логика создания поста
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
        echo "Пост создан: " . $this->getCreatedAt() . "<br>";
    }

    public function updatePost() {
        // Логика обновления поста
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
        echo "Пост обновлен: " . $this->getUpdatedAt() . "<br>";
    }
}

// Класс Comment
class Comment {
    use Timestampable;

    public function createComment() {
        // Логика создания комментария
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
        echo "Комментарий создан: " . $this->getCreatedAt() . "<br>";
    }

    public function updateComment() {
        // Логика обновления комментария
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
        echo "Комментарий обновлен: " . $this->getUpdatedAt() . "<br>";
    }
}

// Тестируем создание и обновление постов и комментариев
$post = new Post();
$post->createPost();
sleep(1); // Задержка для различия времени
$post->updatePost();

$comment = new Comment();
$comment->createComment();
sleep(1); // Задержка для различия времени
$comment->updateComment();