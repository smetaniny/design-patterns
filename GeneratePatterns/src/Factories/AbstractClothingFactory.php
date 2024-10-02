<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

abstract class AbstractClothingFactory {
    abstract public function createClothingItem(string $type): ClothingItem;
}
