<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Abstracts;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Класс MobileProductDisplay представляет абстракцию для отображения продуктов
 * на мобильных устройствах.
 * Он наследует функциональность от класса ProductDisplay и использует реализацию
 * из интерфейса Implementor для конкретного отображения.
 *
 * @author Smetanin Sergey
 */
class MobileProductDisplay extends ProductDisplay {
    /**
     * Метод showProduct отвечает за отображение продукта на мобильном устройстве.
     * Он выводит заголовок "Мобильная презентация продукта" и затем вызывает
     * метод render() у объекта Implementor для отображения конкретной реализации.
     *
     * @return void
     */
    public function showProduct(): void {
        echo 'Мобильная презентация продукта: '; // Заголовок для мобильного отображения
        $this->implementor->render(); // Вызов метода render() для отображения продукта
    }
}
