<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Класс Dress реализует интерфейс Implementor и предоставляет конкретную
 * реализацию отображения платья в интернет-магазине.
 * Это часть паттерна "Мост", позволяющего отделить абстракцию отображения
 * от конкретной реализации.
 *
 * @author Smetanin Sergey
 */
class Dress implements Implementor {
    /**
     * Метод render выводит сообщение о том, что платье отображается.
     * Это реализация метода интерфейса Implementor.
     *
     * @return void
     */
    public function render(): void
    {
        // Вывод сообщения об отображении платья
        echo 'Отображение платья.<br />';
    }
}
