<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators;

use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Decorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Product;

/**
 * Класс ColorDecorator добавляет информацию о цвете к продукту.
 *
 * Он наследует от класса Decorator и расширяет функциональность
 * базового продукта, добавляя к его описанию информацию о цвете.
 *
 * @author Smetanin Sergey
 */
class ColorDecorator extends Decorator
{
    // Хранит цвет продукта
    private string $color;

    /**
     * Конструктор класса ColorDecorator.
     *
     * @param Product $product Объект продукта, к которому добавляется цвет.
     * @param string  $color   Цвет продукта.
     */
    public function __construct(Product $product, string $color)
    {
        parent::__construct($product); // Вызов конструктора родительского класса
        $this->color = $color;         // Установка цвета
    }

    /**
     * Получает описание продукта с учетом добавленного цвета.
     *
     * @return string Описание продукта с указанием его цвета.
     */
    public function getDescription(): string
    {
        // Возвращает описание базового продукта с добавлением информации о цвете
        return $this->product->getDescription() . " (цвет: $this->color)";
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
