<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

/**
 * Абстрактный класс ClothingPrototype определяет интерфейс для клонирования объектов одежды.
 * Этот класс служит базой для всех конкретных прототипов одежды (например, костюм, платье и т.д.).
 */
abstract class ClothingPrototype {

    /**
     * Абстрактный метод для клонирования объекта.
     * Каждый подкласс должен реализовать этот метод, возвращающий клон объекта.
     *
     * @return mixed
     */
    abstract public function clone();
}
