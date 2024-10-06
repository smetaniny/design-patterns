<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products;

/**
 * Класс Clothing представляет конкретный продукт - одежду.
 *
 * Он наследует от абстрактного класса Product и реализует методы,
 * которые возвращают описание и стоимость одежды.
 *
 * @author Smetanin Sergey
 */
class Clothing extends Product
{
    // Название товара (одежды)
    private string $name;

    // Цена товара (одежды)
    private float $price;

    /**
     * Конструктор класса Clothing.
     *
     * @param string $name  Название одежды.
     * @param float  $price Цена одежды.
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;   // Установка имени одежды
        $this->price = $price; // Установка цены одежды
    }

    /**
     * Получает описание продукта (одежды).
     *
     * Возвращает название одежды.
     *
     * @return string Описание продукта (название одежды).
     */
    public function getDescription(): string
    {
        return $this->name;
    }

    /**
     * Получает стоимость продукта (одежды).
     *
     * Возвращает цену одежды.
     *
     * @return float Цена продукта (одежды).
     */
    public function cost(): float
    {
        return $this->price;
    }
}
