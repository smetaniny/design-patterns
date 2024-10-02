<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ComplexClothingItem;

/**
 * Класс Suit представляет костюм и реализует интерфейс ComplexClothingItem.
 * Костюм состоит из нескольких компонентов, таких как пиджак, брюки и жилет.
 */
class Suit implements ComplexClothingItem {
    private string $description;
    private float $price;
    private array $components;

    /**
     * Конструктор класса Suit.
     *
     * @param string $description Описание костюма.
     * @param float $price Цена костюма.
     * @param array $components Компоненты костюма (например, пиджак, брюки, жилет).
     */
    public function __construct(string $description, float $price, array $components = []) {
        $this->description = $description;
        $this->price = $price;
        $this->components = $components;
    }

    /**
     * Возвращает описание костюма.
     *
     * @return string Описание костюма.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Возвращает цену костюма.
     *
     * @return float Цена костюма.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Возвращает компоненты костюма (например, пиджак, брюки, жилет).
     *
     * @return array Компоненты костюма.
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * Добавляет компонент к костюму.
     *
     * @param string $component Компонент костюма, который нужно добавить (например, аксессуар).
     */
    public function addComponent(string $component): void
    {
        $this->components[] = $component;
    }
}
