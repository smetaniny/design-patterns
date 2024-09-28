<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\Contracts\MensSuitAbstract;

/**
 * Класс для осеннего мужского костюма.
 *
 * Этот класс наследует абстрактный класс MensSuitAbstract и представляет собой
 * конкретную реализацию осеннего мужского костюма.
 * Он может быть расширен для добавления специфических свойств и методов,
 * относящихся к осеннему костюму.
 */
class AutumnMensSuit extends MensSuitAbstract
{
    /**
     * Конструктор класса.
     * При создании экземпляра осеннего мужского костюма выводит сообщение.
     */
    public function __construct()
    {
        echo 'Создан осенний мужской костюм.<br />'; // Сообщение о создании костюма
    }
}
