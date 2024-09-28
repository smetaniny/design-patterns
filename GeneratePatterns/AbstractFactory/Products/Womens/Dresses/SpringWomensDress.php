<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\Contracts\WomensDressAbstract;

/**
 * Класс для весеннего женского платья.
 *
 * Этот класс реализует абстрактный класс WomensDressAbstract
 * и представляет конкретное платье для весеннего сезона.
 *
 * Он может быть расширен для добавления специфических свойств и методов,
 * таких как тип ткани, длина платья и другие детали дизайна.
 */
class SpringWomensDress extends WomensDressAbstract
{
    /**
     * Конструктор, который выводит сообщение о создании весеннего женского платья.
     */
    public function __construct()
    {
        echo 'Создано весеннее женское платье.<br />'; // Сообщение о создании платья
    }
}
