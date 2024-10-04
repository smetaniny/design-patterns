<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

/**
 * Класс Dress представляет платье и реализует интерфейс ClothingItem.
 */
class Dress implements ClothingItem {
    private string $description;
    private float $price;

    /**
     * Конструктор класса Dress.
     *
     * @param string $description Описание платья.
     * @param float $price Цена платья.
     */
    public function __construct(string $description, float $price) {
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * Возвращает описание платья.
     *
     * @return string Описание платья.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Возвращает цену платья.
     *
     * @return float Цена платья.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }
}
