<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

class PrototypeRegistry {
    private $prototypes = [];

    public function register(string $name, ClothingPrototype $prototype) {
        $this->prototypes[$name] = $prototype;
    }

    public function get(string $name): ?ClothingPrototype {
        return $this->prototypes[$name] ?? null;
    }
}
