<?php

namespace App\Http\classes\RPG;

abstract class Item {

    private string $nome;
    private float $peso;

    public function __construct(string $nome, float $peso)
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    abstract public function usarItem():string;

    public function getname():string 
    {
        return $this->nome;
    }
    
    public function getweight():float 
    {
        return $this->peso;
    }
}