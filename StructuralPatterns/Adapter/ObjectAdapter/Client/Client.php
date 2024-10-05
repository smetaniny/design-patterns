<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Client;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Contracts\Target;

/**
 * Класс клиента, который использует целевой интерфейс.
 * Этот класс отвечает за отображение информации о костюмах
 * с использованием адаптированного интерфейса.
 *
 * @author Smetanin Sergey
 */
class Client
{
    // Ссылка на целевой интерфейс, который используется клиентом
    private Target $target;

    /**
     * Конструктор класса Client.
     *
     * @param Target $target Целевой интерфейс, который будет использоваться для получения данных о костюмах.
     */
    public function __construct(Target $target)
    {
        // Инициализация целевого интерфейса
        $this->target = $target;
    }

    /**
     * Метод для отображения информации о костюмах.
     * Этот метод вызывает метод целевого интерфейса для получения данных о костюмах
     * и выводит их на экран.
     */
    public function displaySuitInfo(): void
    {
        // Вывод информации о костюмах, полученной через целевой интерфейс
        echo $this->target->getSuitDetails();
    }
}
