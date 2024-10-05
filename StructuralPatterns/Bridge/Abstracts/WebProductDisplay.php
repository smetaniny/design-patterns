<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Abstracts;

/**
 * Класс WebProductDisplay расширяет абстрактный класс ProductDisplay и реализует метод showProduct(),
 * который вызывает метод render() из конкретной реализации Implementor.
 * Это уточнённая абстракция, предназначенная для отображения продукта в веб-приложении.
 *
 * @author Smetanin Sergey
 */
class WebProductDisplay extends ProductDisplay
{
    /**
     * Метод showProduct() вызывает метод render() у объекта Implementor.
     * Он предназначен для отображения конкретной реализации продукта в формате,
     * подходящем для веб-приложений.
     *
     * @return void
     */
    public function showProduct(): void
    {
        echo 'Веб-презентация продукта: ';
        $this->implementor->render(); // Вызов метода render() для отображения продукта.
    }
}
