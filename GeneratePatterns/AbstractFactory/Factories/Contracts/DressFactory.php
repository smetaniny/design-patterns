<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\Contracts\WomensDressAbstract;

/**
 * Интерфейс DressFactory объявляет методы для создания женских платьев.
 *
 * Этот интерфейс следует реализовать в конкретных фабриках, чтобы обеспечить создание различных
 * типов женских платьев в зависимости от сезона или других параметров.
 *
 * Используя этот интерфейс, клиент может создавать платья, не заботясь о конкретных реализациях.
 * Это обеспечивает гибкость и расширяемость системы.
 */
interface DressFactory
{
    /**
     * Создает осеннее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр осеннего женского платья.
     *         Конкретный класс платья будет зависеть от реализации интерфейса.
     */
    public function createAutumnWomensDress(): WomensDressAbstract;

    /**
     * Создает летнее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр летнего женского платья.
     *         Конкретный класс платья будет зависеть от реализации интерфейса.
     */
    public function createSummerWomensDress(): WomensDressAbstract;

    /**
     * Создает весеннее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр весеннего женского платья.
     *         Конкретный класс платья будет зависеть от реализации интерфейса.
     */
    public function createSpringWomensDress(): WomensDressAbstract;
}
