<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\OldData;

/**
 * Класс старой системы, который имеет несовместимый интерфейс.
 * Этот класс предоставляет метод для получения данных о старых коллекциях костюмов.
 *
 * @author Smetanin Sergey
 */
class OldClothingSystem
{
    /**
     * Метод для получения данных о старой коллекции костюмов.
     *
     * @return string Возвращает строку с данными о старых костюмах.
     */
    public function fetchOldSuitData(): string
    {
        // Возвращаем данные о старой коллекции костюмов
        return 'Данные о старой коллекции костюмов ClassAdapter';
    }
}
