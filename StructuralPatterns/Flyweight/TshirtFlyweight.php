<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight;

use App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight\Contracts\ClothingItemFlyweight;

/**
 * Конкретный класс "Приспособленец" для футболки, реализующий интерфейс ClothingItemFlyweight.
 * Хранит внутреннее состояние товара (название, описание, цену) и отображает товар с внешними параметрами.
 *
 * @author Smetanin Sergey
 */
class TshirtFlyweight implements ClothingItemFlyweight
{
    // Внутреннее состояние: название товара
    private string $name;

    // Внутреннее состояние: описание товара
    private string $description;

    // Внутреннее состояние: цена товара
    private float $price;

    /**
     * Конструктор инициализирует внутреннее состояние товара (название, описание и цену).
     *
     * @param string $name        - Название товара
     * @param string $description - Описание товара
     * @param float  $price       - Цена товара
     */
    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * Метод отображения товара с учётом внешних параметров (размер, цвет, количество).
     *
     * @param string $size     - Размер товара (внешнее состояние)
     * @param string $color    - Цвет товара (внешнее состояние)
     * @param int    $quantity - Количество товара (внешнее состояние)
     */
    public function display(string $size, string $color, int $quantity): void
    {
        // Выводим внутреннее и внешнее состояние товара
        echo "Товар: {$this->name}, Описание: {$this->description}, Цена: {$this->price} <br />";
        echo "Размер: $size, Цвет: $color, Количество: $quantity <br />";
    }
}
