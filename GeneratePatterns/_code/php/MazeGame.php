<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\_code\php;

/**
 * Основной класс для игры, который создаёт лабиринт.
 */
class MazeGame
{
    /**
     * Метод создаёт лабиринт с двумя комнатами, соединёнными дверью.
     * Комнаты имеют стены по всем сторонам, кроме той, где расположена дверь.
     *
     * @return Maze Возвращает объект созданного лабиринта.
     */
    public function createMaze(): Maze
    {
        // Создаём объект лабиринта
        $maze = new Maze();

        // Создаём две комнаты
        $r1 = new Room(1);
        $r2 = new Room(2);

        // Создаём дверь, соединяющую две комнаты
        $door = new Door($r1, $r2);

        // Добавляем комнаты в лабиринт
        $maze->addRoom($r1);
        $maze->addRoom($r2);

        // Настраиваем стороны первой комнаты: север, восток (с дверью), юг и запад - стены
        $r1->setSide(Direction::North, new Wall);
        $r1->setSide(Direction::East, $door);
        $r1->setSide(Direction::South, new Wall);
        $r1->setSide(Direction::West, new Wall);

        // Настраиваем стороны второй комнаты: север, восток, юг и запад (с дверью)
        $r2->setSide(Direction::North, new Wall);
        $r2->setSide(Direction::East, new Wall);
        $r2->setSide(Direction::South, new Wall);
        $r2->setSide(Direction::West, $door);

        // Возвращаем готовый лабиринт
        dd($maze);
    }
}
