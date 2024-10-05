<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Класс Accessory реализует интерфейс Implementor и представляет конкретную
 * реализацию отображения аксессуаров в интернет-магазине.
 * Это часть паттерна "Мост", позволяющего отделить абстракцию отображения
 * от конкретной реализации.
 *
 * @author Smetanin Sergey
 */
class Accessory implements Implementor {
    /**
     * Метод render выводит сообщение о том, что аксессуар отображается.
     * Это реализация метода интерфейса Implementor.
     *
     * @return void
     */
    public function render(): void {
        echo 'Отображение аксессуара.<br />';
    }
}
