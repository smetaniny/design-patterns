<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Builders;

/**
 * Абстрактный класс, который определяет интерфейс для строителей
 *
 * @author Smetanin Sergey
 */
abstract class Builder
{
    /**
     * Абстрактный метод для сборки пиджака
     *
     */
    abstract public function buildJacket();

    /**
     * Абстрактный метод для сборки брюк
     *
     */
    abstract public function buildPants();
}
