<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Adapter;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Contracts\Target;
use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\OldData\OldClothingSystem;

/**
 * Адаптер, который наследует как интерфейс Target, так и класс OldClothingSystem.
 * Этот класс адаптирует интерфейс старой системы к новому целевому интерфейсу.
 *
 * @author Smetanin Sergey
 */
class ClassAdapter extends OldClothingSystem implements Target
{
    /**
     * Реализация метода интерфейса Target.
     *
     * Этот метод адаптирует вызов к старой системе, используя
     * метод fetchOldSuitData() для получения данных о костюмах.
     *
     * @return string Возвращает данные о костюмах.
     */
    public function getSuitDetails(): string
    {
        // Используем старый метод для получения данных и адаптируем его
        return $this->fetchOldSuitData(); // Вызов метода старой системы для получения данных
    }
}
