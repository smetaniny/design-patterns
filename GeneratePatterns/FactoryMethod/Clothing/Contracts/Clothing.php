<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts;

/**
 * Интерфейс Clothing, который представляет собой продукт в паттерне "Фабричный метод".
 * Все конкретные продукты (например, костюм и платье) будут реализовывать этот интерфейс.
 */
interface Clothing
{
    /**
     * Метод, который должен быть реализован конкретными продуктами.
     * Он описывает, как носить этот элемент одежды.
     *
     * @return void
     */
    public function wear(): void;
}
