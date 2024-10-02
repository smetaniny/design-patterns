<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Products;


use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

class Dress implements ClothingItem {
    private $description;
    private $price;

    public function __construct($description, $price) {
        $this->description = $description;
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
