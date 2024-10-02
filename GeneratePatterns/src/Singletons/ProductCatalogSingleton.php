<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Singletons;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

class ProductCatalogSingleton
{
    private static $instance = null;
    private $products = [];

    private function __construct()
    {
        // Инициализация, например, загрузка продуктов из БД
    }

    public static function getInstance(): ProductCatalogSingleton
    {
        if (self::$instance === null) {
            self::$instance = new ProductCatalogSingleton();
        }
        return self::$instance;
    }

    public function addProduct(ClothingItem $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function filterProducts(array $criteria): array
    {
        return array_filter($this->products, function (ClothingItem $product) use ($criteria) {
            // Пример фильтрации по описанию и цене
            $matches = true;

            if (isset($criteria['description'])) {
                $matches = $matches && strpos($product->getDescription(), $criteria['description']) !== false;
            }

            if (isset($criteria['min_price'])) {
                $matches = $matches && $product->getPrice() >= $criteria['min_price'];
            }

            if (isset($criteria['max_price'])) {
                $matches = $matches && $product->getPrice() <= $criteria['max_price'];
            }

            return $matches;
        });
    }
}
