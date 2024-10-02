<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\CustomSuit;

class SuitBuilder {
    private $suit;

    public function __construct() {
        $this->suit = new CustomSuit("Кастомный костюм", 0);
    }


    public function createJacket() {
        $this->suit->addComponent("Пиджак");
    }

    public function createTrousers() {
        $this->suit->addComponent("Брюки");
    }

    public function createVest() {
        $this->suit->addComponent("Жилет");
    }

    public function getResult() {
        return $this->suit;
    }
}
