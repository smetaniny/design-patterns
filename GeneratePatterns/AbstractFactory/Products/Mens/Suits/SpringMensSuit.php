<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Mens\Suits\Contracts\MensSuitAbstract;

/**
 * Класс для весеннего мужского костюма.
 *
 * Этот класс наследует абстрактный класс MensSuitAbstract и представляет собой
 * конкретную реализацию весеннего мужского костюма.
 *
 * Он может быть расширен для добавления специфических свойств и методов,
 * относящихся к весеннему костюму, таких как материалы, цвета и дизайн.
 */
class SpringMensSuit extends MensSuitAbstract
{
    /**
     * Конструктор класса.
     * При создании экземпляра весеннего мужского костюма выводит сообщение.
     */
    public function __construct()
    {
        echo 'Создан весенний мужской костюм.<br />'; // Сообщение о создании костюма
    }
}
