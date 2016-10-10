<?php


namespace App;


use App\weapon\Bow;

class Archer extends Unit
{
    public function __construct(string $name, Weapon $weapon)
    {
        parent::__construct($name, $weapon);
        $this->setArmor(new armor\BronzeArmor());
    }
}