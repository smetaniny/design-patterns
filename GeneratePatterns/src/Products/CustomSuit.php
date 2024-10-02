<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ComplexClothingItem;

class CustomSuit implements ComplexClothingItem {
    private $components = [];
    private $price = 10000; // Предположим, что цена фиксирована

    public function addComponent($component) {
        $this->components[] = $component;
    }

    public function getDescription(): string
    {
        return "Костюм, состоящий из: " . implode(", ", $this->components);
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getComponents(): array
    {
        return $this->components;
    }
}
