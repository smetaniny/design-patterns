<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\_code\php;

// Комната (Room) наследует от MapSite
class Room extends MapSite {
    private array $sides = []; // Инициализация массива сторон
    private $roomNumber; // Закрытое свойство, доступное через геттер

    public function __construct($roomNo) {
        $this->roomNumber = $roomNo; // Устанавливаем номер комнаты
    }

    // Геттер для получения номера комнаты
    public function getRoomNumber() {
        return $this->roomNumber;
    }

    // Метод для получения стороны комнаты по направлению
    public function getSide($direction) {
        return $this->sides[$direction] ?? null; // Возвращаем сторону или null, если не установлена
    }

    // Метод для установки стороны комнаты по направлению
    public function setSide($direction, MapSite $site) {
        $this->sides[$direction] = $site; // Устанавливаем сторону комнаты
    }

    // Метод для входа в комнату
    public function enter() {
        echo "Entering room " . $this->roomNumber . "\n";
    }
}
