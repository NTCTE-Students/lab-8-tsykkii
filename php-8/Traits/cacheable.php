<?php
// Trait Cacheable с методами getCache и setCache
trait Cacheable {
    // Кэш будет храниться в массиве, в реальной ситуации можно использовать файловое хранилище или Redis
    private $cache = [];

    // Метод для получения данных из кэша
    public function getCache($key) {
        // Проверка, есть ли данные в кэше по ключу
        if (isset($this->cache[$key])) {
            echo "Данные извлечены из кэша: {$key}<br>";
            return $this->cache[$key];
        }
        return null;
    }

    // Метод для установки данных в кэш
    public function setCache($key, $data) {
        $this->cache[$key] = $data;
        echo "Данные сохранены в кэш: {$key}<br>";
    }
}

// Класс DataProvider
class DataProvider {
    use Cacheable;

    // Метод для имитации получения данных из базы данных
    public function getData($query) {
        // Сначала проверяем кэш
        $cachedData = $this->getCache($query);
        if ($cachedData !== null) {
            return $cachedData;  // Если данные есть в кэше, возвращаем их
        }

        // Иначе делаем "запрос" к базе данных (имитируем)
        echo "Выполнение запроса: {$query}<br>";
        $data = "Данные для запроса: {$query}";  // Это наши данные

        // Сохраняем данные в кэш
        $this->setCache($query, $data);

        return $data;
    }
}

// Класс ProductRepository
class ProductRepository {
    use Cacheable;

    // Метод для получения списка продуктов
    public function getProducts() {
        // Сначала проверяем кэш
        $cachedData = $this->getCache('products');
        if ($cachedData !== null) {
            return $cachedData;  // Если данные есть в кэше, возвращаем их
        }

        // Иначе делаем "запрос" к базе данных (имитируем)
        echo "Запрос к базе данных для получения продуктов.<br>";
        $products = ["Продукт 1", "Продукт 2", "Продукт 3"];  // Список продуктов

        // Сохраняем данные в кэш
        $this->setCache('products', $products);

        return $products;
    }
}

// Тестируем кэширование

// Класс DataProvider
$dataProvider = new DataProvider();
echo $dataProvider->getData('SELECT * FROM users');  // Первый запрос
echo "<br>";
echo $dataProvider->getData('SELECT * FROM users');  // Повторный запрос, извлечение из кэша
echo "<br>";

// Класс ProductRepository
$productRepo = new ProductRepository();
print_r($productRepo->getProducts());  // Первый запрос
echo "<br>";
print_r($productRepo->getProducts());  // Повторный запрос, извлечение из кэша