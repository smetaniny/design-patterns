<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\Contracts\WomensSuitAbstract;

/**
 * Класс для весеннего женского костюма.
 *
 * Этот класс реализует абстрактный класс WomensSuitAbstract
 * и представляет конкретный костюм для весеннего сезона.
 *
 * В будущем здесь можно добавить специфические свойства, такие как
 * цвет, материал и детали дизайна, характерные для весенних костюмов.
 */
class SpringWomensSuit extends WomensSuitAbstract
{
    /**
     * Конструктор, который выводит сообщение о создании весеннего женского костюма.
     */
    public function __construct()
    {
        echo 'Создан весенний женский костюм.<br />'; // Сообщение о создании костюма
    }
}
