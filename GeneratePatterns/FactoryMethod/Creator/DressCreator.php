<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Creator;

use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Dress;
use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts\Clothing;

/**
 * Конкретный класс DressCreator, который наследует ClothingCreator.
 * Этот класс реализует фабричный метод для создания объектов типа Dress.
 *
 * @author Smetanin Sergey
 */
class DressCreator extends ClothingCreator
{
    /**
     * Реализация фабричного метода для создания одежды.
     * Этот метод создает и возвращает новый экземпляр класса Dress.
     *
     * @return Clothing
     */
    public function createClothing(): Clothing
    {
        // Возвращаем новый экземпляр класса Dress.
        return new Dress();
    }
}
