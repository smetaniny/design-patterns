<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator;

use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators\ColorDecorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators\DiscountDecorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Decorators\SizeDecorator;
use App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products\Clothing;

/**
 * Класс IndexDecoratorController демонстрирует использование шаблона проектирования "Декоратор".
 *
 * Этот класс отвечает за создание товара (одежды) и добавление к нему различных характеристик
 * с помощью декораторов, таких как размер, цвет и скидка.
 *
 * @author Smetanin Sergey
 */
class IndexDecoratorController
{
    /**
     * Метод index демонстрирует применение декораторов к объекту Clothing.
     *
     * Создается объект Clothing, который затем оборачивается в декораторы для добавления характеристик.
     * В конце выводится описание и цена товара с учетом всех добавленных декораторов.
     *
     * @return void
     */
    public function index(): void
    {
        // Создаем объект Clothing с именем 'Футболка' и ценой 100
        $shirt = new Clothing('Футболка', 100);

        // Добавляем размер 'M' к объекту Clothing с помощью SizeDecorator
        $shirt = new SizeDecorator($shirt, 'M');

        // Добавляем цвет 'красный' к объекту Clothing с помощью ColorDecorator
        $shirt = new ColorDecorator($shirt, 'красный');

        // Добавляем скидку 20% к объекту Clothing с помощью DiscountDecorator
        $shirt = new DiscountDecorator($shirt, 20);

        // Выводим описание товара с добавленными характеристиками
        // Ожидаемый вывод: Футболка (размер: M) (цвет: красный) (скидка: 20%)
        echo $shirt->getDescription() . '<br />';

        // Вычисляем и выводим итоговую цену товара с учетом скидки
        // Ожидаемый вывод: Цена: 80 руб.
        echo 'Цена: ' . $shirt->cost() . ' руб.';
    }
}
