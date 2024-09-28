<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Client\Client;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\ClothingDressFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\ClothingSuitFactory;

/**
 * Класс IndexController отвечает за демонстрацию работы паттерна "Абстрактная Фабрика".
 * Он создает конкретные фабрики для различных типов одежды и использует их для создания продуктов,
 * которые затем передаются клиенту для выполнения операций.
 *
 * Паттерн "Абстрактная Фабрика" позволяет создавать семейства связанных или зависимых объектов
 * без привязки к их конкретным классам.
 *
 * @author Smetanin Sergey
 */
class IndexController
{
    /**
     * Метод index является точкой входа для демонстрации работы с фабриками одежды.
     * Он инициирует создание клиентского объекта и запускает демонстрацию
     * создания костюмов и платьев.
     */
    public function index(): void
    {
        // Создаем клиент, который использует обе фабрики
        $client = new Client(
            suitFactory: new ClothingSuitFactory(),
            dressFactory: new ClothingDressFactory()
        );

        // Демонстрация создания костюмов
        echo '<h3>Создание костюмов:</h3>';
        // Метод run клиента использует фабрику костюмов для создания объектов костюмов.
        $client->run();

        echo '<br/>';

        // Демонстрация создания платьев
        echo '<h3>Создание платьев:</h3>';
        // Метод runDresses клиента использует фабрику платьев для создания объектов платьев.
        $client->runDresses();
    }
}
