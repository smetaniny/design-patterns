<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Suit;

/**
 * Класс SuitPrototype реализует паттерн "Прототип" для создания копий объектов костюмов.
 */
class SuitPrototype extends ClothingPrototype {
    /**
     * Экземпляр костюма, который будет клонироваться.
     *
     * @var Suit
     */
    private $suit;

    /**
     * Конструктор, принимающий объект костюма, который будет использован для клонирования.
     *
     * @param Suit $suit Исходный объект костюма.
     */
    public function __construct(Suit $suit) {
        $this->suit = $suit;
    }

    /**
     * Метод для клонирования костюма.
     *
     * @return Suit Возвращает новый клон объекта костюма.
     */
    public function clone(): Suit {
        // Создаем клон костюма с использованием встроенного механизма клонирования PHP.
        return clone $this->suit;
    }
}
