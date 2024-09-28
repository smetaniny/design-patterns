<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Products\Womens\Dresses\Contracts\WomensDressAbstract;

/**
 * Класс для летнего женского платья.
 *
 * Этот класс реализует абстрактный класс WomensDressAbstract
 * и представляет конкретное платье для летнего сезона.
 *
 * Он может быть расширен для добавления специфических свойств и методов,
 * таких как материалы, длина, и различные стили, характерные для летних платьев.
 */
class SummerWomensDress extends WomensDressAbstract
{
    /**
     * Конструктор, который выводит сообщение о создании летнего женского платья.
     */
    public function __construct()
    {
        echo 'Создано летнее женское платье.<br />'; // Сообщение о создании платья
    }
}
