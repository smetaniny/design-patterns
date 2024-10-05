<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Client\Client;

/**
 * Контроллер, который использует паттерн "Мост".
 * Отвечает за инициализацию клиентского кода и запуск основной логики.
 *
 * @author Smetanin Sergey
 */
class IndexBridgeController
{
    /**
     * Метод index отвечает за запуск клиентской логики.
     * В данном случае он создает объект Client и вызывает его метод main().
     *
     * Этот метод демонстрирует, как паттерн "Мост" позволяет разделить абстракцию
     * и реализацию, позволяя отображать разные категории одежды на различных платформах.
     *
     * @return void
     */
    public function index(): void
    {
        // Создание объекта Client и запуск метода main() для демонстрации паттерна "Мост".
        // Этот метод показывает, как можно отображать различные продукты (женские костюмы, мужские костюмы,
        // платья и аксессуары) на веб-сайте и в мобильном приложении.
        $client = new Client();
        $client->main();
    }
}
