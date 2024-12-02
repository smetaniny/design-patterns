<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Proxy\Contracts;

/**
 * Интерфейс для отображения изображения
 */
interface ProductImage {
    /**
     * Метод для отображения изображения
     */
    public function display(): void;
}
