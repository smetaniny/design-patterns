<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite;

use App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products\Category;
use App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products\Clothing;

/**
 * Класс IndexCompositeController отвечает за демонстрацию работы паттерна Компоновщик
 * в контексте интернет-магазина одежды.
 *
 * @author Smetanin Sergey
 */
class IndexCompositeController
{
    /**
     * Метод index выполняет основную логику демонстрации:
     * - Создает товары,
     * - Создает категорию и добавляет в нее товары,
     * - Создает клиента,
     * - Позволяет клиенту просмотреть категорию и добавить товары в корзину,
     * - Выводит общую стоимость товаров в корзине.
     *
     * @return void
     */
    public function index(): void
    {
        // Создание товаров с указанием названия и цены
        $shirt = new Clothing('Рубашка', 2500.99);
        $pants = new Clothing('Брюки', 3500.50);
        $shoes = new Clothing('Обувь', 5500.00);

        // Создание категории одежды
        $clothingCategory = new Category('Одежда');
        // Добавление товаров в категорию
        $clothingCategory->add($shirt);
        $clothingCategory->add($pants);
        $clothingCategory->add($shoes);

        // Создание клиента, который будет взаимодействовать с товаром и корзиной
        $customer = new Customer();

        // Клиент просматривает категорию и ее товары
        $customer->viewCategory($clothingCategory);

        // Клиент добавляет товары в корзину
        $customer->addToCart($shirt);
        $customer->addToCart($shoes);

        // Вывод общей стоимости товаров в корзине
        echo '<hr /> Общая стоимость корзины: ' . $customer->getCartTotal() . ' RUB <br />';
    }
}
