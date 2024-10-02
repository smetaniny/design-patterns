<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;


use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;

class DressPrototype extends ClothingPrototype {
    private $dress;

    public function __construct(Dress $dress) {
        $this->dress = $dress;
    }

    public function clone(): Dress {
        return clone $this->dress;
    }
}
