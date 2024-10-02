<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ComplexClothingItem;

class Suit implements ComplexClothingItem {
    private string $description;
    private float $price;
    private array $components;

    /**
     * Конструктор класса Suit
     *
     * @param string $description
     * @param float $price
     * @param array $components
     */
    public function __construct(string $description, float $price, array $components = []) {
        $this->description = $description;
        $this->price = $price;
        $this->components = $components;
    }

    /**
     * Возвращает описание костюма.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Возвращает цену костюма.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Возвращает компоненты костюма (например, пиджак, брюки, жилет).
     *
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * Добавляет компонент к костюму.
     *
     * @param string $component
     */
    public function addComponent(string $component): void
    {
        $this->components[] = $component;
    }
}
