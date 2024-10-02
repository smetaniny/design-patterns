<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;

class DressBuilder {
    private $dress;

    public function __construct() {
        $this->dress = new Dress("Собранное платье", 0);
    }

    public function createDress() {
        $this->dress->setDescription("Элегантное платье");
        $this->dress->setPrice(4000);
    }

    public function getResult() {
        return $this->dress;
    }
}
