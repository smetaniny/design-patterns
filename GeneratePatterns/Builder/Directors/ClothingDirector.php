<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Directors;

use App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Builders\Builder;

/**
 * Директор, который управляет процессом сборки костюма.
 *
 * Этот класс отвечает за вызов методов строителя для
 * последовательного создания частей костюма.
 *
 * @author Smetanin Sergey
 */
class ClothingDirector
{
    // Переменная для хранения строителя
    private Builder $builder;

    /**
     * Конструктор, который принимает строителя как аргумент.
     *
     * @param Builder $builder Экземпляр класса строителя, который будет использоваться для сборки
     */
    public function __construct(Builder $builder)
    {
        // Сохраняем ссылку на строителя
        $this->builder = $builder;
    }

    /**
     * Метод для управления процессом сборки костюма.
     *
     * Этот метод вызывает методы строителя в определенной последовательности
     * для создания полного костюма.
     *
     * @return void
     */
    public function construct(): void
    {
        // Собираем пиджак
        $this->builder->buildJacket();

        // Собираем брюки
        $this->builder->buildPants();
    }
}
