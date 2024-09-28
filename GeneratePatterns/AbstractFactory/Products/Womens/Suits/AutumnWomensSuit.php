<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Suits\Contracts\WomensSuitAbstract;

/**
 * Класс для осеннего женского костюма.
 *
 * Этот класс реализует абстрактный класс WomensSuitAbstract
 * и представляет конкретный костюм для осеннего сезона.
 *
 * В будущем здесь можно добавить специфические свойства, такие как
 * цвет, материал и детали дизайна, характерные для осенних костюмов.
 */
class AutumnWomensSuit extends WomensSuitAbstract
{
    /**
     * Конструктор, который выводит сообщение о создании осеннего женского костюма.
     */
    public function __construct()
    {
        echo 'Создан осенний женский костюм.<br />'; // Сообщение о создании костюма
    }
}
