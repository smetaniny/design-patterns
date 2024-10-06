<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators;

use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Decorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Product;

/**
 * Класс SizeDecorator добавляет информацию о размере к продукту.
 *
 * Он наследует от класса Decorator и расширяет функциональность
 * базового продукта, добавляя к его описанию размер.
 *
 * @author Smetanin Sergey
 */
class SizeDecorator extends Decorator
{
    // Хранит размер продукта
    private string $size;

    /**
     * Конструктор класса SizeDecorator.
     *
     * @param Product $product Объект продукта, к которому добавляется размер.
     * @param string  $size    Размер продукта.
     */
    public function __construct(Product $product, string $size)
    {
        parent::__construct($product); // Вызов конструктора родительского класса
        $this->size = $size;           // Установка размера
    }

    /**
     * Получает описание продукта с учетом добавленного размера.
     *
     * @return string Описание продукта с указанием его размера.
     */
    public function getDescription(): string
    {
        // Возвращает описание базового продукта с добавлением информации о размере
        return $this->product->getDescription() . " (размер: $this->size)";
    }

    /**
     * Получает стоимость продукта.
     *
     * В данном случае цена не изменяется, поэтому возвращается
     * стоимость базового продукта.
     *
     * @return float Цена продукта.
     */
    public function cost(): float
    {
        return $this->product->cost(); // Возвращает стоимость базового продукта
    }
}
