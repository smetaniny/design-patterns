<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight;

use App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight\Contracts\ClothingItemFlyweight;

/**
 * Класс ShoppingCartItem представляет элемент корзины покупок, который содержит товар (приспособленец)
 * и его уникальные параметры (размер, цвет, количество).
 *
 * @author Smetanin Sergey
 */
class ShoppingCartItem
{
    // Приспособленец (товар), содержащий внутреннее состояние
    private ClothingItemFlyweight $flyweight;

    // Внешнее состояние: размер товара
    private string $size;

    // Внешнее состояние: цвет товара
    private string $color;

    // Внешнее состояние: количество товара
    private int $quantity;

    /**
     * Конструктор инициализирует элемент корзины с товаром и его внешними параметрами (размер, цвет, количество).
     *
     * @param ClothingItemFlyweight $flyweight - Приспособленец (товар)
     * @param string                $size      - Размер товара
     * @param string                $color     - Цвет товара
     * @param int                   $quantity  - Количество товара
     */
    public function __construct(ClothingItemFlyweight $flyweight, string $size, string $color, int $quantity)
    {
        $this->flyweight = $flyweight;
        $this->size = $size;
        $this->color = $color;
        $this->quantity = $quantity;
    }

    /**
     * Метод для отображения данных о товаре в корзине. Он использует приспособленца для вывода общего состояния товара,
     * а также выводит уникальные параметры (размер, цвет, количество), относящиеся к этому элементу корзины.
     */
    public function display(): void
    {
        // Используем метод display() приспособленца, передавая внешнее состояние (размер, цвет, количество)
        $this->flyweight->display($this->size, $this->color, $this->quantity);
    }
}
