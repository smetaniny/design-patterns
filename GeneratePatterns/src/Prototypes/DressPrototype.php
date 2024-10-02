<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Products\Dress;

/**
 * Класс DressPrototype реализует паттерн Прототип для объектов платья (Dress).
 * Этот класс позволяет клонировать объект платья, не завися от его конкретного типа.
 */
class DressPrototype extends ClothingPrototype {
    
    /**
     * Экземпляр платья, который будет использоваться в качестве прототипа.
     *
     * @var Dress
     */
    private $dress;

    /**
     * Конструктор принимает объект платья, который будет клонироваться.
     *
     * @param Dress $dress Объект платья для клонирования.
     */
    public function __construct(Dress $dress) {
        $this->dress = $dress;
    }

    /**
     * Клонирует объект платья.
     *
     * @return Dress Возвращает копию объекта платья.
     */
    public function clone(): Dress {
        return clone $this->dress;
    }
}
