<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Adapter;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Contracts\Target;
use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\OldData\OldClothingSystem;

/**
 * Адаптер, который содержит объект старой системы и адаптирует его интерфейс.
 * Этот класс реализует целевой интерфейс и преобразует вызовы методов
 * к старой системе в совместимый формат.
 *
 * @author Smetanin Sergey
 */
class ObjectAdapter implements Target
{
    // Ссылка на объект старой системы, который будет адаптирован
    private OldClothingSystem $oldClothingSystem;

    /**
     * Конструктор класса ObjectAdapter.
     *
     * @param OldClothingSystem $oldClothingSystem Объект старой системы, который будет адаптирован.
     */
    public function __construct(OldClothingSystem $oldClothingSystem)
    {
        $this->oldClothingSystem = $oldClothingSystem; // Инициализация объекта старой системы
    }

    /**
     * Реализация метода интерфейса Target.
     * Этот метод адаптирует вызов к старой системе и возвращает данные о костюмах.
     *
     * @return string Возвращает данные о костюмах, полученные из старой системы.
     */
    public function getSuitDetails(): string
    {
        // Используем объект старой системы для получения данных и адаптируем их
        return $this->oldClothingSystem->fetchOldSuitData(); // Возвращаем данные из старой системы
    }
}
