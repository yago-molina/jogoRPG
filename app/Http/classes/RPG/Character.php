<?php

namespace App\Http\classes\RPG;

abstract class Character {
    
    protected string $name;
    protected int $health;
    protected int $strength;

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
            return "O personagem " . $this->name . " foi derrotado";
        }

        return "O personagem " . $this->name . " recebeu " . $damage . " de dano. 
        Vida atual: ". $this->health;
    }

    public function getName():string {
        return $this->name;
    }
} 