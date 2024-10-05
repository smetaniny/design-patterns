<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Singleton;

/**
 * Class IndexSingletonConstructor
 * Демонстрация работы с паттерном Singleton.
 *
 * @author Smetanin Sergey
 */
class IndexSingletonConstructor
{
    /**
     * Метод для демонстрации работы Singleton.
     *
     * @return void
     */
    public function index(): void
    {
        // Получаем первый экземпляр Singleton
        $singleton1 = Singleton::getInstance();

        // Вывод: Выполнение бизнес-логики.
        echo $singleton1->someBusinessLogic() . '<br />';

        // Получаем второй экземпляр Singleton
        $singleton2 = Singleton::getInstance();

        // Проверяем, идентичны ли экземпляры
        echo ($singleton1 === $singleton2) ? 'Экземпляры идентичны.' : 'Экземпляры разные.';
    }
}
