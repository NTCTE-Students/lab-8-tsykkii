<?php
class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "\"{$this->title}\" автор: {$this->author}";
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function getInfo() {
        return parent::getInfo() . " ({$this->pages} страниц)";
    }
}

class Article extends Material {
    public $journal;

    public function __construct($title, $author, $journal) {
        parent::__construct($title, $author);
        $this->journal = $journal;
    }

    public function getInfo() {
        return parent::getInfo() . " (Опубликован в \"{$this->journal}\")";
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getInfo() {
        return parent::getInfo() . " (Длительность: {$this->duration} минут)";
    }
}

// Создание объектов и тестирование
$book = new Book("Война и мир", "Лев Николаевич Толстой", 960);
$article = new Article("Перевал", "Ирина Ермакова", "Новый мир");
$video = new Video("PHP OOP Tutorial", "Jane Smith", 120);

echo $book->getInfo() . PHP_EOL;
echo $article->getInfo() . PHP_EOL;
echo $video->getInfo() . PHP_EOL;