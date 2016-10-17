<?php


namespace App\armor;


use App\Armor;
use App\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return ($attack->getDamage() / 3) ;
    }
}