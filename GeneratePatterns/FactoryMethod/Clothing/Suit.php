<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing;

use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts\Clothing;

/**
 * Класс Suit реализует интерфейс Clothing.
 * Он представляет конкретный продукт в паттерне "Фабричный метод".
 *
 * @author Smetanin Sergey
 */
class Suit implements Clothing
{
    /**
     * Метод, который реализует интерфейс Clothing.
     * Этот метод описывает, как носить этот костюм.
     *
     * @return void
     */
    public function wear(): void
    {
        echo 'Вы надели костюм.<br />';
    }
}
