<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Creator;

use App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts\Clothing;

/**
 * Абстрактный класс ClothingCreator, который определяет фабричный метод.
 * Конкретные создатели будут наследовать этот класс и реализовывать метод создания одежды.
 *
 * @author Smetanin Sergey
 */
abstract class ClothingCreator
{
    /**
     * Абстрактный метод для создания одежды.
     * Конкретные классы создателей должны реализовать этот метод.
     *
     * @return \App\GangOfFourDesignPatterns\GeneratePatterns\FactoryMethod\Clothing\Contracts\Clothing
     */
    abstract public function createClothing(): Clothing;

    /**
     * Метод для выполнения операции с созданной одеждой.
     * Этот метод вызывает фабричный метод, создает одежду и вызывает метод wear() для её использования.
     *
     * @return void
     */
    public function someOperation(): void
    {
        // Создаем одежду с помощью фабричного метода.
        $clothing = $this->createClothing();

        // Вызываем метод wear() для демонстрации.
        $clothing->wear();
    }
}
