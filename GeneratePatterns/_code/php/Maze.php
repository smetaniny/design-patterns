<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\_code\php;

// Лабиринт (Maze), содержащий комнаты
class Maze
{
    private $rooms = [];

    // Метод для добавления комнаты в лабиринт
    public function addRoom(Room $room)
    {
        // Используем геттер вместо прямого доступа к свойству
        $this->rooms[$room->getRoomNumber()] = $room;
    }

    // Метод для получения комнаты по её номеру
    public function roomNo($roomNumber)
    {
        // Проверяем, существует ли комната с таким номером, если нет, возвращаем null
        return $this->rooms[$roomNumber] ?? null;
    }
}
