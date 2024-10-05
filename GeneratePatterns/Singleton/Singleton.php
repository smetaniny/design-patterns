<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Singleton;

/**
 * Class Singleton
 * Реализация паттерна Singleton.
 *
 * Обеспечивает доступ к единственному экземпляру класса.
 *
 * @author Smetanin Sergey
 */
class Singleton
{
    // Хранение единственного экземпляра класса
    private static ?Singleton $instance = null;

    /**
     * Запрет на создание объекта извне
     */
    private function __construct()
    {
        // Здесь можно выполнить инициализацию, если это необходимо
    }

    /**
     * Запрет на клонирование объекта
     */
    private function __clone()
    {
    }

    /**
     * Запрет на десериализацию
     */
    public function __wakeup()
    {
    }

    /**
     * Метод для получения единственного экземпляра
     *
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        // Проверяем, существует ли уже экземпляр
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Пример метода, который может быть вызван
     *
     * @return string
     */
    public function someBusinessLogic(): string
    {
        return 'Выполнение бизнес-логики.';
    }
}
