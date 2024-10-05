<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\OldData;

/**
 * Старый класс, который имеет несовместимый интерфейс.
 * Этот класс используется для получения данных о костюмах,
 * но его интерфейс несовместим с новым целевым интерфейсом.
 *
 * @author Smetanin Sergey
 */
class OldClothingSystem
{
    /**
     * Метод для получения данных о старой коллекции костюмов.
     * Возвращает строку с данными о костюмах.
     *
     * @return string
     */
    public function fetchOldSuitData(): string
    {
        // Возвращаем строку с данными о старой коллекции костюмов
        return 'Данные о старой коллекции костюмов ObjectAdapter';
    }
}
