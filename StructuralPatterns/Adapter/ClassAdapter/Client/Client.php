<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Client;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Contracts\Target;

/**
 * Клиентский код, который использует целевой интерфейс.
 * Этот класс взаимодействует с адаптером, реализующим интерфейс Target,
 * для отображения информации о костюмах.
 *
 * @author Smetanin Sergey
 */
class Client
{
    // Хранит ссылку на объект, реализующий интерфейс Target
    private Target $target;

    /**
     * Конструктор, который принимает объект целевого интерфейса.
     *
     * @param Target $target Объект, реализующий интерфейс Target.
     */
    public function __construct(Target $target)
    {
        // Инициализация свойства target
        $this->target = $target;
    }

    /**
     * Метод для отображения информации о костюмах.
     * Использует метод getSuitDetails() интерфейса Target
     * для получения и вывода информации о костюмах.
     */
    public function displaySuitInfo(): void
    {
        // Выводим детали костюмов
        echo $this->target->getSuitDetails();
    }
}
