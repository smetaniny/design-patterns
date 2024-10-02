<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Singletons;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

/**
 * Класс ProductCatalogSingleton реализует паттерн Singleton для каталога продуктов.
 *
 * Этот класс гарантирует, что будет создан только один экземпляр каталога продуктов,
 * и предоставляет методы для добавления, получения и фильтрации продуктов.
 */
class ProductCatalogSingleton
{
    /**
     * Единственный экземпляр класса.
     *
     * @var ProductCatalogSingleton|null
     */
    private static $instance = null;

    /**
     * Массив продуктов в каталоге.
     *
     * @var ClothingItem[]
     */
    private $products = [];

    /**
     * Закрытый конструктор, чтобы предотвратить создание новых экземпляров класса.
     * Здесь можно инициализировать каталог, например, загрузить продукты из базы данных.
     */
    private function __construct()
    {
        // Инициализация, например, загрузка продуктов из БД
    }

    /**
     * Возвращает единственный экземпляр класса ProductCatalogSingleton.
     *
     * @return ProductCatalogSingleton
     */
    public static function getInstance(): ProductCatalogSingleton
    {
        // Проверяем, был ли уже создан экземпляр класса
        if (self::$instance === null) {
            self::$instance = new ProductCatalogSingleton();
        }

        return self::$instance;
    }

    /**
     * Добавляет новый продукт в каталог.
     *
     * @param ClothingItem $product Продукт, который необходимо добавить в каталог.
     */
    public function addProduct(ClothingItem $product): void
    {
        $this->products[] = $product;
    }

    /**
     * Возвращает все продукты, добавленные в каталог.
     *
     * @return ClothingItem[] Массив продуктов.
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Фильтрует продукты на основе переданных критериев.
     *
     * @param array $criteria Ассоциативный массив с критериями фильтрации.
     *                        Пример: ['description' => 'костюм', 'min_price' => 1000, 'max_price' => 5000]
     * @return ClothingItem[] Массив продуктов, соответствующих критериям.
     */
    public function filterProducts(array $criteria): array
    {
        return array_filter($this->products, function (ClothingItem $product) use ($criteria) {
            $matches = true;

            // Фильтрация по описанию, если указано
            if (isset($criteria['description'])) {
                $matches = $matches && strpos($product->getDescription(), $criteria['description']) !== false;
            }

            // Фильтрация по минимальной цене, если указано
            if (isset($criteria['min_price'])) {
                $matches = $matches && $product->getPrice() >= $criteria['min_price'];
            }

            // Фильтрация по максимальной цене, если указано
            if (isset($criteria['max_price'])) {
                $matches = $matches && $product->getPrice() <= $criteria['max_price'];
            }

            return $matches;
        });
    }
}
