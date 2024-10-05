<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter;

use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Adapter\ObjectAdapter;
use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Client\Client;
use App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\OldData\OldClothingSystem;

/**
 * Класс контроллера, который демонстрирует использование адаптера объектов.
 * Этот класс отвечает за взаимодействие между устаревшей системой и клиентом.
 *
 * @author Smetanin Sergey
 */
class IndexObjectAdapterController
{
    /**
     * Метод index выполняет демонстрацию работы адаптера.
     * Он создает экземпляр старой системы, затем создает адаптер,
     * который использует эту старую систему, и передает адаптер клиенту.
     */
    public function index(): void
    {
        // Создаем экземпляр устаревшей системы
        $oldSystem = new OldClothingSystem();

        // Создаем адаптер, передавая в него устаревшую систему
        $adapter = new ObjectAdapter($oldSystem);

        // Создаем клиента, которому передаем адаптер для получения данных
        $client = new Client($adapter);

        // Вызываем метод клиента для отображения информации о костюмах
        $client->displaySuitInfo();
    }
}
