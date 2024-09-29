<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Products;

/**
 * Класс для представления конечного продукта (костюма).
 *
 * Этот класс хранит информацию о собранном костюме,
 * включая пиджак и брюки, и предоставляет методы
 * для установки и получения их описания.
 *
 * @author Smetanin Sergey
 */
class Suit
{
    // Переменная для хранения пиджака
    private string $jacket;

    // Переменная для хранения брюк
    private string $pants;

    /**
     * Метод для установки пиджака.
     *
     */
    public function setJacket(string $jacket): void
    {
        // Устанавливаем значение пиджака
        $this->jacket = $jacket;
    }

    /**
     * Метод для установки брюк.
     *
     */
    public function setPants(string $pants): void
    {
        // Устанавливаем значение брюк
        $this->pants = $pants;
    }

    /**
     * Метод для получения описания готового костюма.
     *
     * @return string Описание костюма.
     */
    public function getDescription(): string
    {
        // Возвращаем описание
        return "Костюм состоит из: {$this->jacket} и {$this->pants}.";
    }
}
