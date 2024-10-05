<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Contracts;

/**
 * Интерфейс Prototype, который объявляет метод для клонирования объектов
 */
interface Prototype
{
    /**
     * Возвращает копию объекта.
     *
     * @return \App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Contracts\Prototype
     */
    public function clone(): Prototype;

    /**
     * Получаем информацию о продукте.
     *
     * @return string
     */
    public function getInfo(): string;
}
