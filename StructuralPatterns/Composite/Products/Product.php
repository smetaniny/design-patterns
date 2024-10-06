<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products;

/**
 * Абстрактный класс Product представляет базовую сущность для всех товаров в интернет-магазине.
 * Содержит общие свойства и методы, необходимые для работы с товарами.
 *
 * @author Smetanin Sergey
 */
abstract class Product
{
    // Название товара
    protected string $name;
    // Цена товара
    protected float $price;

    /**
     * Конструктор класса Product.
     *
     * @param string $name  - Название товара.
     * @param float  $price - Цена товара.
     */
    public function __construct(string $name, float $price)
    {
        // Инициализация названия товара
        $this->name = $name;
        // Инициализация цены товара
        $this->price = $price;
    }

    /**
     * Метод getName возвращает название товара.
     *
     * @return string - Название товара.
     */
    public function getName(): string
    {
        // Возврат названия товара
        return $this->name;
    }

    /**
     * Метод getPrice возвращает цену товара.
     *
     * @return float - Цена товара.
     */
    public function getPrice(): float
    {
        // Возврат цены товара
        return $this->price;
    }
}
