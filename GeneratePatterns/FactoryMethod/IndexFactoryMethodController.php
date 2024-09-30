<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod;

use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Creator\DressCreator;
use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Creator\SuitCreator;

/**
 * Контроллер для демонстрации паттерна "Фабричный метод".
 *
 * @author Smetanin Sergey
 */
class IndexFactoryMethodController
{
    /**
     * Метод для демонстрации работы фабричного метода.
     *
     * @return void
     */
    public function index(): void
    {
        // Создаем экземпляры конкретных создателей для платья и костюма
        $dressCreator = new DressCreator();
        $suitCreator = new SuitCreator();

        // Используем создателей для создания одежды и вызова метода wear()
        echo 'Создаем платье: <br />';
        // Одежда: платье
        $dressCreator->someOperation();

        echo 'Создаем костюм:<br />';
        // Одежда: костюм
        $suitCreator->someOperation();
    }
}
