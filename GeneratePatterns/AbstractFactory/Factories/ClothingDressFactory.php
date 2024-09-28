<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts\DressFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\Contracts\WomensDressAbstract;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\AutumnWomensDress;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\SummerWomensDress;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\SpringWomensDress;

/**
 * Класс ClothingDressFactory реализует интерфейс DressFactory и отвечает за создание
 * различных женских платьев.
 *
 * Этот класс может быть расширен для добавления конкретных реализаций для разных сезонов.
 * Используя паттерн "Абстрактная Фабрика", мы можем создавать объекты платьев
 * без необходимости знать их конкретные классы.
 *
 * @author Smetanin Sergey
 */
class ClothingDressFactory implements DressFactory
{
    /**
     * Создает осеннее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр осеннего женского платья.
     */
    public function createAutumnWomensDress(): WomensDressAbstract
    {
        // Создаем и возвращаем осеннее платье
        return new AutumnWomensDress();
    }

    /**
     * Создает летнее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр летнего женского платья.
     */
    public function createSummerWomensDress(): WomensDressAbstract
    {
        // Создаем и возвращаем летнее платье
        return new SummerWomensDress();
    }

    /**
     * Создает весеннее женское платье.
     *
     * @return WomensDressAbstract Возвращает экземпляр весеннего женского платья.
     */
    public function createSpringWomensDress(): WomensDressAbstract
    {
        // Создаем и возвращаем весеннее платье
        return new SpringWomensDress();
    }
}
