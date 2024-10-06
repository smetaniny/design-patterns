<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products;

/**
 * Класс Clothing представляет отдельный товар, который является одеждой.
 * Наследует свойства и методы от абстрактного класса Product.
 *
 * @author Smetanin Sergey
 */
class Clothing extends Product
{
    /**
     * Конструктор класса Clothing.
     * Инициализирует новый объект одежды с указанным названием и ценой.
     *
     * @param string $name - Название товара (одежды).
     * @param float  $price - Цена товара (одежды).
     */
    public function __construct(string $name, float $price)
    {
        // Вызов конструктора родительского класса Product
        parent::__construct($name, $price);
    }
}
