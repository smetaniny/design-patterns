<?php

namespace App\GangOfFourDesignPatterns\GeneratePatterns\_code\php;


// Класс стены (Wall), наследует MapSite
class Wall extends MapSite {
    public function enter() {
        echo "Bumped into a wall\n";
    }
}
