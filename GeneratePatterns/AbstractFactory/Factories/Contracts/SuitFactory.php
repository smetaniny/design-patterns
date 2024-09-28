<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\Contracts\MensSuitAbstract;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\Contracts\WomensSuitAbstract;

/**
 * Интерфейс SuitFactory объявляет методы для создания различных типов костюмов.
 *
 * Этот интерфейс следует реализовать в конкретных фабриках для обеспечения создания
 * мужских и женских костюмов, в зависимости от сезона или стиля.
 *
 * Используя этот интерфейс, клиент может запрашивать создание различных типов костюмов
 * без необходимости знать о конкретных реализациях.
 */
interface SuitFactory
{
    /**
     * Создает женский костюм.
     *
     * @return WomensSuitAbstract Возвращает экземпляр женского костюма, созданного конкретной фабрикой.
     *         Конкретный класс женского костюма будет зависеть от реализации фабрики.
     */
    public function createWomensSuit(): WomensSuitAbstract;

    /**
     * Создает мужской костюм.
     *
     * @return MensSuitAbstract Возвращает экземпляр мужского костюма, созданного конкретной фабрикой.
     *         Конкретный класс мужского костюма будет зависеть от реализации фабрики.
     */
    public function createMensSuit(): MensSuitAbstract;
}
