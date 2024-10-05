<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Класс WomenSuit реализует интерфейс Implementor и предоставляет конкретную
 * реализацию для отображения женского костюма в интернет-магазине.
 * Этот класс является частью паттерна "Мост", который разделяет абстракцию
 * отображения и конкретную реализацию.
 *
 * @author Smetanin Sergey
 */
class WomenSuit implements Implementor {
    /**
     * Метод render отвечает за отображение женского костюма.
     * Он выводит текст, демонстрирующий, что выбран женский костюм.
     *
     * @return void
     */
    public function render(): void
    {
        // Вывод сообщения об отображении женского костюма
        echo 'Отображение женского костюма.<br />';
    }
}
