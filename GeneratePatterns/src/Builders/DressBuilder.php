<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;

/**
 * Класс DressBuilder реализует паттерн "Строитель" для пошагового создания платья.
 */
class DressBuilder {
    private Dress $dress;

    /**
     * Конструктор инициализирует новый объект платья с базовыми параметрами.
     */
    public function __construct() {
        // Инициализация платья с базовым описанием и нулевой ценой.
        $this->dress = new Dress("Собранное платье", 0);
    }

    /**
     * Метод для сборки платья, задает описание и цену.
     */
    public function createDress(): void {
        // Устанавливаем описание платья.
        $this->dress->setDescription("Элегантное платье");
        // Устанавливаем цену платья.
        $this->dress->setPrice(4000);
    }

    /**
     * Возвращает результат — готовое платье.
     *
     * @return Dress
     */
    public function getResult(): Dress {
        return $this->dress;
    }
}
