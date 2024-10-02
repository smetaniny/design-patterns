<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

class WomenClothingFactory extends AbstractClothingFactory {
    public function createClothingItem($type): ClothingItem
    {
        if ($type === 'костюм') {
            return new Suit("Женский костюм", 8000);
        } elseif ($type === 'платье') {
            return new Dress("Женское платье", 6000);
        }
        // Можно добавить другие типы одежды
    }
}
