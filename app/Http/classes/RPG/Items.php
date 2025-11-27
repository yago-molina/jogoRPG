<?php

namespace App\Http\classes\RPG;

abstract class Items {

    private string $name;
    private float $weight;

    public function __construct(string $name, float $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    abstract public function useItem():string;

    public function getName():string 
    {
        return $this->name;
    }
    
    public function getWeight():float 
    {
        return $this->weight;
    }
}