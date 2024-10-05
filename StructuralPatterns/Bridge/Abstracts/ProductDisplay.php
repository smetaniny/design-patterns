<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Abstracts;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Contracts\Implementor;

/**
 * Абстрактный класс ProductDisplay служит базой для всех абстракций в паттерне "Мост".
 * Он содержит ссылку на объект реализации (Implementor) и определяет абстрактный метод showProduct(),
 * который будет реализован в подклассах. Класс отделяет высокоуровневую логику (абстракцию)
 * от конкретной реализации (Implementor), позволяя гибко комбинировать абстракции и реализации.
 *
 * @author Smetanin Sergey
 */
abstract class ProductDisplay {
    /**
     * Объект Implementor представляет конкретную реализацию, которую будет использовать абстракция.
     */
    protected Implementor $implementor;

    /**
     * Конструктор класса ProductDisplay принимает объект Implementor,
     * устанавливая связь между абстракцией и конкретной реализацией.
     *
     * @param Implementor $implementor Объект, реализующий интерфейс Implementor.
     */
    public function __construct(Implementor $implementor) {
        $this->implementor = $implementor;
    }

    /**
     * Абстрактный метод showProduct() должен быть реализован в подклассах.
     * Его цель - вызвать метод render() у объекта Implementor для отображения
     * конкретной реализации продукта.
     *
     * @return void
     */
    abstract public function showProduct(): void;
}
