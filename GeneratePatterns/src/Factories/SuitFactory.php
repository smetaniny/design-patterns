<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;


use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

class SuitFactory {
    public function createSuit(): Suit {
        // Логика создания костюма
        return new Suit("Классический костюм", 300);
    }
}
