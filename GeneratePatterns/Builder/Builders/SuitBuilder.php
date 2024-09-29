<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Builders;

use App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Products\Suit;

/**
 * Конкретный строитель для костюмов, который наследует абстрактный класс Builder
 *
 * Этот класс реализует методы для создания различных частей костюма,
 * таких как пиджак и брюки.
 *
 * @author Smetanin Sergey
 */
class SuitBuilder extends Builder
{
    // Переменная для хранения собранного костюма
    private Suit $suit;

    // Конструктор, который создает новый экземпляр костюма
    public function __construct()
    {
        // Инициализируем новый объект Suit
        $this->suit = new Suit();
    }

    /**
     * Реализация метода сборки пиджака
     *
     * Этот метод создает пиджак для костюма и добавляет его в объект Suit.
     *
     * @return void
     */
    public function buildJacket(): void
    {
        // Устанавливаем пиджак
        $this->suit->setJacket('Пиджак с классическим кроем');
    }

    /**
     * Реализация метода сборки брюк
     *
     * Этот метод создает брюки для костюма и добавляет их в объект Suit.
     *
     * @return void
     */
    public function buildPants(): void
    {
        // Устанавливаем брюки
        $this->suit->setPants('Брюки с прямым кроем');
    }

    /**
     * Метод для получения готового костюма
     *
     * Этот метод возвращает полностью собранный объект Suit.
     *
     * @return Suit  Возвращает экземпляр собранного костюма
     */
    public function getSuit(): Suit
    {
        // Возвращаем собранный костюм
        return $this->suit;
    }
}
