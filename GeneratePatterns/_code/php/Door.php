<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\_code\php;

// Класс двери (Door), наследует MapSite
class Door extends MapSite {
    private $room1;
    private $room2;
    private $isOpen;

    public function __construct(Room $room1, Room $room2) {
        $this->room1 = $room1;
        $this->room2 = $room2;
        $this->isOpen = false;
    }

    public function enter() {
        if ($this->isOpen) {
            echo "You pass through the door\n";
        } else {
            echo "The door is closed\n";
        }
    }

    public function otherSideFrom(Room $room) {
        if ($room === $this->room1) {
            return $this->room2;
        } else {
            return $this->room1;
        }
    }

    public function openDoor() {
        $this->isOpen = true;
    }
}
