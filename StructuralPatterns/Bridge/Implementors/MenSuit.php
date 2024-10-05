<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Класс MenSuit реализует интерфейс Implementor и предоставляет конкретную
 * реализацию для отображения мужского костюма в интернет-магазине.
 * Это часть паттерна "Мост", который позволяет отделить абстракцию отображения
 * от конкретной реализации.
 *
 * @author Smetanin Sergey
 */
class MenSuit implements Implementor
{
    /**
     * Метод render выводит сообщение о том, что мужской костюм отображается.
     * Это реализация метода интерфейса Implementor.
     *
     * @return void
     */
    public function render(): void
    {
        // Вывод сообщения об отображении мужского костюма
        echo 'Отображение мужского костюма.<br />';
    }
}
