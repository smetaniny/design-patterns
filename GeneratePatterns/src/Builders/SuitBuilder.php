<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\CustomSuit;

/**
 * Класс SuitBuilder реализует паттерн "Строитель" для пошагового создания костюмов.
 * Позволяет добавлять компоненты костюма (пиджак, брюки, жилет) и возвращать итоговый костюм.
 */
class SuitBuilder {
    private CustomSuit $suit;

    /**
     * Конструктор инициализирует новый объект CustomSuit.
     */
    public function __construct() {
        // Инициализируем кастомный костюм с базовым описанием и ценой.
        $this->suit = new CustomSuit();
    }

    /**
     * Добавляет пиджак в костюм.
     */
    public function createJacket(): void {
        $this->suit->addComponent('Пиджак');
    }

    /**
     * Добавляет брюки в костюм.
     */
    public function createTrousers(): void {
        $this->suit->addComponent('Брюки');
    }

    /**
     * Добавляет жилет в костюм.
     */
    public function createVest(): void {
        $this->suit->addComponent('Жилет');
    }

    /**
     * Возвращает результат — готовый кастомный костюм.
     *
     * @return CustomSuit
     */
    public function getResult(): CustomSuit {
        return $this->suit;
    }
}
