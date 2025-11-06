<?php

namespace App\Http\classes\RPG;
use App\Http\classes\RPG\Personagens;

class Jogador extends Personagens
{
    private int $experiencia;

    public function __construct(string $nome, int $vida, int $forca)
    {
        parent::__construct($nome, $vida, $forca);

        $this->experiencia = 0;
    }

    public function atacar(): string {
        $dano=$this->forca;
        return $this->nome . "Atacou e causou" . $dano . "de dano";
    }

    public function ganharExperiencia(int $experiencia):string {
        $this->experiencia += $experiencia;
        return "($this->nome;) Ganhou ($experiencia) de experiencia.";
    }
}