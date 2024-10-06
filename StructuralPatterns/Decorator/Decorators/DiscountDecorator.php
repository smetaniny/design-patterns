<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators;

use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Decorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Product;

/**
 * Класс DiscountDecorator добавляет информацию о скидке к продукту.
 *
 * Он наследует от класса Decorator и расширяет функциональность
 * базового продукта, добавляя к его описанию информацию о скидке
 * и изменяя его стоимость с учетом этой скидки.
 *
 * @author Smetanin Sergey
 */
class DiscountDecorator extends Decorator
{
    // Процент скидки
    private float $discountPercentage;

    /**
     * Конструктор класса DiscountDecorator.
     *
     * @param Product $product            Объект продукта, к которому добавляется скидка.
     * @param float   $discountPercentage Процент скидки на продукт.
     */
    public function __construct(Product $product, float $discountPercentage)
    {
        parent::__construct($product); // Вызов конструктора родительского класса
        $this->discountPercentage = $discountPercentage; // Установка процента скидки
    }

    /**
     * Получает описание продукта с учетом добавленной скидки.
     *
     * @return string Описание продукта с указанием его скидки.
     */
    public function getDescription(): string
    {
        // Возвращает описание базового продукта с добавлением информации о скидке
        return $this->product->getDescription() . " (скидка: $this->discountPercentage%)";
    }

    /**
     * Получает стоимость продукта с учетом скидки.
     *
     * Рассчитывает стоимость продукта, умножая базовую стоимость на
     * (1 - процент скидки/100).
     *
     * @return float Цена продукта с учетом скидки.
     */
    public function cost(): float
    {
        // Возвращает стоимость базового продукта с учетом скидки
        return $this->product->cost() * (1 - $this->discountPercentage / 100);
    }
}
