<?php

namespace App\Http\classes\RPG;

use App\Http\classes\RPG\Personagem;

class Jogador extends Character
{
    private int $experience;
    public function __construct(string $name, int $health, int $attack)
    {
        parent::__construct($name, $health, $attack);

        $this->experience = 0;
    }
    public function gainExperience(int $experience): string 
    {
        $this->experience += $experience;
        return "{$this->name} ganhou {$experience} de experiência.";
    }
    public function attack(): string
    {
        $dano=$this->attack()*2;
        return "{this->nome} atacou e causou {$dano} de dano";
    }
}