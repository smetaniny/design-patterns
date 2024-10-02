<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Contracts\ClothingItem;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

/**
 * Фабрика для создания женской одежды.
 * 
 * Реализует абстрактный метод для создания различных типов женской одежды,
 * таких как костюмы и платья.
 */
class WomenClothingFactory extends AbstractClothingFactory {
    
    /**
     * Создает предмет женской одежды в зависимости от типа.
     *
     * @param string $type Тип создаваемого предмета одежды (например, костюм или платье).
     * @return ClothingItem Возвращает объект типа ClothingItem (костюм или платье).
     */
    public function createClothingItem(string $type): ClothingItem
    {
        // Проверяем тип создаваемого предмета одежды
        if ($type === 'костюм') {
            return new Suit("Женский костюм", 8000);
        } elseif ($type === 'платье') {
            return new Dress("Женское платье", 6000);
        }

        // Можно добавить обработку для других типов одежды, если они потребуются
        throw new \InvalidArgumentException("Неизвестный тип одежды: $type");
    }
}
