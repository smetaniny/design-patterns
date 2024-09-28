<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts\SuitFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\AutumnMensSuit;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\Contracts\MensSuitAbstract;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\SpringMensSuit;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\AutumnWomensSuit;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\Contracts\WomensSuitAbstract;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\SpringWomensSuit;

/**
 * Конкретная фабрика для создания костюмов.
 *
 * Класс ClothingSuitFactory реализует интерфейс SuitFactory и отвечает за создание
 * различных типов костюмов как для женщин, так и для мужчин в зависимости от сезона.
 * Этот класс может быть расширен для добавления новых типов костюмов в будущем.
 */
class ClothingSuitFactory implements SuitFactory
{
    /**
     * Создает женский осенний костюм.
     *
     * @return AutumnWomensSuit Возвращает экземпляр осеннего женского костюма.
     */
    public function createWomensSuit(): WomensSuitAbstract
    {
        // Создаем и возвращаем новый экземпляр осеннего женского костюма
        return new AutumnWomensSuit();
    }

    /**
     * Создает женский весенний костюм.
     *
     * @return WomensSuitAbstract Возвращает экземпляр весеннего женского костюма.
     */
    public function createSpringWomensSuit(): WomensSuitAbstract
    {
        // Создаем и возвращаем новый экземпляр весеннего женского костюма
        return new SpringWomensSuit();
    }

    /**
     * Создает мужской весенний костюм.
     *
     * @return MensSuitAbstract Возвращает экземпляр весеннего мужского костюма.
     */
    public function createMensSuit(): MensSuitAbstract
    {
        // Создаем и возвращаем новый экземпляр весеннего мужского костюма
        return new SpringMensSuit();
    }

    /**
     * Создает мужской осенний костюм.
     *
     * @return MensSuitAbstract Возвращает экземпляр осеннего мужского костюма.
     */
    public function createAutumnMensSuit(): MensSuitAbstract
    {
        // Создаем и возвращаем новый экземпляр осеннего мужского костюма
        return new AutumnMensSuit();
    }
}
