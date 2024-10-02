<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

/**
 * Конкретная фабрика для создания мужской одежды.
 * 
 * Реализует метод создания предметов одежды на основе типа.
 */
class MenClothingFactory extends AbstractClothingFactory {
    
    /**
     * Создает мужской предмет одежды на основе переданного типа.
     *
     * @param string $type Тип одежды (например, "костюм").
     * @return ClothingItem Возвращает объект мужской одежды (например, костюм).
     */
    public function createClothingItem(string $type): ClothingItem
    {
        // Проверяем тип создаваемого предмета
        if ($type === 'костюм') {
            return new Suit("Мужской костюм", 7000);
        }

        // Если тип не распознан, по умолчанию возвращаем мужской костюм
        return new Suit("Мужской костюм", 7000);
    }
}
