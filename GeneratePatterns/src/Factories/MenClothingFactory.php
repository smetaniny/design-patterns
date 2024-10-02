<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

class MenClothingFactory extends AbstractClothingFactory {
    public function createClothingItem($type): ClothingItem
    {
        if ($type === 'костюм') {
            return new Suit("Мужской костюм", 7000);
        }

        return new Suit("Мужской костюм", 7000);
    }
}
