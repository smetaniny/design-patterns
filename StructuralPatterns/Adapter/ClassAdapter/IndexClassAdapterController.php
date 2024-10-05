<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Adapter\ClassAdapter;
use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Client\Client;

/**
 * Контроллер для демонстрации использования адаптера класса.
 * Этот класс отвечает за создание адаптера и клиента,
 * а также за отображение информации о костюмах.
 *
 * @author Smetanin Sergey
 */
class IndexClassAdapterController
{
    /**
     * Метод для выполнения основной логики.
     * Здесь создаются экземпляры адаптера и клиента,
     * а затем вызывается метод для отображения информации о костюмах.
     */
    public function index(): void
    {
        // Создаем экземпляр адаптера класса
        $adapter = new ClassAdapter();
        // Создаем экземпляр клиента, передавая адаптер
        $client = new Client($adapter);
        // Вызываем метод для отображения информации о костюмах
        $client->displaySuitInfo();
    }
}
