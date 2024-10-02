<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;

/**
 * Абстрактный класс AbstractClothingFactory, представляющий фабрику для создания предметов одежды.
 * 
 * Конкретные фабрики должны реализовывать метод createClothingItem для создания определенных типов одежды.
 */
abstract class AbstractClothingFactory {
    /**
     * Создает предмет одежды на основе переданного типа.
     *
     * @param string $type Тип создаваемого предмета одежды (например, "костюм" или "платье").
     * @return ClothingItem Возвращает объект, реализующий интерфейс ClothingItem.
     */
    abstract public function createClothingItem(string $type): ClothingItem;
}
