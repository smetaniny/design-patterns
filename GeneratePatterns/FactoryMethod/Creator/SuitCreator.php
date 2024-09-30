<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Creator;

use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Suit;
use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts\Clothing;

/**
 * Конкретный класс SuitCreator, который наследует ClothingCreator.
 * Этот класс реализует фабричный метод для создания объектов типа Suit.
 *
 * @author Smetanin Sergey
 */
class SuitCreator extends ClothingCreator {

    /**
     * Реализация фабричного метода для создания одежды.
     * Этот метод создает и возвращает новый экземпляр класса Suit.
     *
     * @return Clothing
     */
    public function createClothing(): Clothing {
        return new Suit(); // Возвращаем новый экземпляр класса Suit.
    }
}
