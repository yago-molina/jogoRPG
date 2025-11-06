<?php

namespace App\Http\classes\RPG;

abstract class Personagens {
    
    protected string $nome;
    protected int $vida;
    protected int $forca;

    public function __construct(string $nome, int $vida, int $forca)
    {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->forca = $forca;
    }

    abstract public function atacar():string;

    public function receberDano(int $dano):string {
        $this->vida -= $dano;
        if ($this->vida <= 0) {
            return "O personagem " . $this->nome . " foi derrotado";
        }

        return "O personagem " . $this->nome . " recebeu " . $dano . " de dano. Vida atual: " . $this->vida;
    }

    public function getname():string {
        return $this->nome;
    }
} 