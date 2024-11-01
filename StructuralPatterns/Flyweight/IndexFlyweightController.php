<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight;

/**
 * Контроллер, демонстрирующий применение паттерна "Приспособленец" в интернет-магазине одежды.
 *
 * @author Smetanin Sergey
 */
class IndexFlyweightController
{
    /**
     * Метод, имитирующий процесс добавления товаров в корзину несколькими клиентами.
     */
    public function index(): void
    {
        // Создаем фабрику для управления приспособленцами (товарами)
        $factory = new FlyweightFactory();

        // Клиент 1 добавляет в корзину футболку (используя фабрику для получения объекта товара)
        $flyweightTshirt = $factory->getFlyweight('Футболка', 'Белая футболка, 100% хлопок', 1000);
        $client1 = new Client();
        // Добавление футболки размера M, цвета белый, в количестве 2 шт. в корзину клиента 1
        $client1->addItemToCart($flyweightTshirt, 'M', 'Белый', 2);

        // Клиент 2 добавляет в корзину ту же футболку, но другого размера и цвета
        $client2 = new Client();
        // Добавление той же футболки, но размера L, цвета черный, в количестве 1 шт. в корзину клиента 2
        $client2->addItemToCart($flyweightTshirt, 'L', 'Чёрный', 1);

        // Клиент 3 добавляет в корзину другой товар (шорты)
        $flyweightShorts = $factory->getFlyweight('Шорты', 'Чёрные шорты, спортивные', 1500);
        $client3 = new Client();
        // Добавление шорт размера S, цвета черный, в количестве 1 шт. в корзину клиента 3
        $client3->addItemToCart($flyweightShorts, 'S', 'Чёрный', 1);

        // Вывод содержимого корзины клиента 1
        echo 'Корзина клиента 1: <br />';
        $client1->displayCart();

        // Вывод содержимого корзины клиента 2
        echo '<br />Корзина клиента 2: <br />';
        $client2->displayCart();

        // Вывод содержимого корзины клиента 3
        echo '<br /> Корзина клиента 3: <br />';
        $client3->displayCart();
    }
}
