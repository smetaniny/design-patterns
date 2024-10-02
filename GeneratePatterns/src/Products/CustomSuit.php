<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ComplexClothingItem;

/**
 * Класс CustomSuit представляет настраиваемый костюм, который реализует интерфейс ComplexClothingItem.
 */
class CustomSuit implements ComplexClothingItem {
    private array $components = [];
    private float $price = 10000; // Предположим, что цена фиксирована

    /**
     * Добавляет компонент к костюму.
     *
     * @param string $component Название компонента (например, "пиджак", "брюки").
     */
    public function addComponent(string $component): void {
        $this->components[] = $component;
    }

    /**
     * Возвращает описание костюма с перечислением его компонентов.
     *
     * @return string Описание костюма.
     */
    public function getDescription(): string
    {
        return "Костюм, состоящий из: " . implode(", ", $this->components);
    }

    /**
     * Возвращает фиксированную цену костюма.
     *
     * @return float Цена костюма.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Возвращает список компонентов костюма.
     *
     * @return array Массив компонентов костюма.
     */
    public function getComponents(): array
    {
        return $this->components;
    }
}
