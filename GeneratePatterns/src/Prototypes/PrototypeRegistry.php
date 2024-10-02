<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes;

/**
 * Класс PrototypeRegistry управляет реестром прототипов одежды, предоставляя
 * возможность регистрировать и получать клонируемые объекты.
 */
class PrototypeRegistry {
    /**
     * Ассоциативный массив для хранения зарегистрированных прототипов одежды.
     *
     * @var array
     */
    private $prototypes = [];

    /**
     * Регистрирует новый прототип в реестре.
     *
     * @param string $name Название или ключ прототипа.
     * @param ClothingPrototype $prototype Объект прототипа, который должен быть зарегистрирован.
     */
    public function register(string $name, ClothingPrototype $prototype): void {
        $this->prototypes[$name] = $prototype;
    }

    /**
     * Получает прототип из реестра по его имени.
     *
     * @param string $name Имя зарегистрированного прототипа.
     *
     * @return ClothingPrototype|null Возвращает объект прототипа или null, если прототип с таким именем не найден.
     */
    public function get(string $name): ?ClothingPrototype {
        return $this->prototypes[$name] ?? null;
    }
}
