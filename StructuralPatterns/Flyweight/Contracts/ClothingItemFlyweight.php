<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight\Contracts;

/**
 * Интерфейс ClothingItemFlyweight определяет контракт для объектов-приспособленцев (товаров),
 * которые могут быть использованы в качестве общего состояния для различных клиентов.
 */
interface ClothingItemFlyweight
{
    /**
     * Метод отображает информацию о товаре с учетом его внешних параметров (размер, цвет, количество).
     *
     * @param string $size     - Размер товара
     * @param string $color    - Цвет товара
     * @param int    $quantity - Количество товара
     */
    public function display(string $size, string $color, int $quantity): void;
}
