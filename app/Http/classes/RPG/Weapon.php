<?php 

namespace App\Http\classes\RPG;

use App\Http\classes\RPG\Items;

abstract class Weapon extends Items {
    protected string $type;
    protected int $damage;

    public function __construct(string $name, float $weight, string $type, int $damage)
    {
        return parent::__construct($name, $weight);
        $this->type = $name;
        $this->damage = $damage;
    }

    abstract public function useWeapon():string;

    public function causeDamage(int $damage):int 
    {
       return $this->damage;
    }

    public function getType():string
    {
        return $this->type;
    }

    public function getDamage(): int 
    {
        return $this->damage;
    }
}