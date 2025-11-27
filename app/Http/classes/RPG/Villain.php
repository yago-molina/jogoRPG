<?php

namespace App\Http\classes\RPG;

abstract class Villain extends Character {
    private int $experiencia;
    private array $lootTable = [];

     public function __construct(string $name, int $health, int $strength)
    {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
    }

    abstract public function attack():string;

    public function receiveDamage(int $damage):string {
        $this->health -= $damage;
        if ($this->health <= 0) {
            return "O vilão " . $this->name . " foi derrotado";
        }

        return "O vilão " . $this->name . " recebeu " . $damage . " de dano. Vida atual: " . $this->health;
    }

    public function getName():string {
        return $this->name;
    }
    public function dropExperience(): int {
        return $this->experiencia;
    }
    public function dropItems(): array {
        $droppedItems = [];
        foreach ($this->lootTable as $drop) {
            $item = $drop['item'];
            $chance = $drop ['drop'];
            $prize_draw = rand(1, 3);
            if ($prize_draw <= $chance) {
                $droppedItems[] = $item;
            }
        }
        return $droppedItems;
    }
}