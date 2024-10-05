<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Adapter\ClassAdapter\Contracts;

/**
 * Целевой интерфейс, который нужен клиенту.
 * Этот интерфейс определяет метод для получения данных о костюмах,
 * который будет реализован адаптером класса.
 */
interface Target
{
    /**
     * Метод для получения деталей о костюмах.
     *
     * @return string Возвращает строку с информацией о костюмах.
     */
    public function getSuitDetails(): string;
}
