<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

/**
 * Фабрика для создания объектов класса Suit (костюм).
 */
class SuitFactory {
    
    /**
     * Создает объект костюма с предопределенными свойствами.
     *
     * @return Suit Возвращает новый объект костюма с описанием и ценой.
     */
    public function createSuit(): Suit {
        // Логика создания костюма с фиксированными параметрами
        return new Suit("Классический костюм", 300);
    }
}
