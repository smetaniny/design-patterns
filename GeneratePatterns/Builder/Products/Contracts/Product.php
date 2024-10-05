<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Products\Contracts;

/**
 * Абстрактный класс для всех продуктов.
 *
 * @author Smetanin Sergey
 */
abstract class Product
{
    /**
     * Описание продукта.
     *
     * @return string
     */
    abstract public function getDescription(): string;
}
