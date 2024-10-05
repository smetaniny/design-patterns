<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ObjectAdapter\Contracts;

/**
 * Целевой интерфейс, который нужен клиенту.
 * Этот интерфейс определяет методы, которые клиент должен использовать
 * для получения информации о костюмах.
 */
interface Target
{
    /**
     * Метод для получения информации о костюмах.
     *
     * @return string Возвращает строку с деталями костюма.
     */
    public function getSuitDetails(): string;
}
