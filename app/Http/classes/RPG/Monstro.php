<?php

namespace App\Http\classes\RPG;
use App\Http\classes\RPG\Item;

abstract class Monstro {
    protected string $tipo;
    protected int $vida;
    protected int $forca;
    protected int $experiencia;
    protected array $lootTable = [];

    public function __construct(string $tipo, int $vida, int $forca , int $experiencia) {
        $this->tipo = $tipo;
        $this->vida = $vida;
        $this->forca = $forca;
        $this->experiencia = $experiencia;
    }

    public function soltarExperiencia(): int {
        return $this->experiencia;
    }

    public function soltarItens(): array {
        $itensDropados = [];
        foreach ($this->lootTable as $drop) {
            $item = $drop['item'];
            $chance = $drop ['drop'];
            $sorteio = rand(1, 3);
            if ($sorteio <= $chance) {
                $itensDropados[] = $item;
            }
        }
        return $itensDropados;
    }

    public function receberDano(int $dano):string {
        $this->vida -= $dano;
        if ($this->vida <= 0) {
            return "O Monstro " . $this->tipo . " foi derrotado";
        }

        return "O Monstro " . $this->tipo . " recebeu " . $dano . " de dano. Vida atual: " . $this->vida;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
    
    public function getVida(): int {
        return $this->vida;
    }

    public function estaVivo(): bool {
        return $this->vida > 0;
    }
}