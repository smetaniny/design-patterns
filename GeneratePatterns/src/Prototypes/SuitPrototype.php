<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

class SuitPrototype extends ClothingPrototype {
    private $suit;

    public function __construct(Suit $suit) {
        $this->suit = $suit;
    }

    public function clone(): Suit {
        return clone $this->suit;
    }
}
