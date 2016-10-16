<?php


namespace App\armor;


use App\Armor;
use App\Attack;

class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        return ($attack->getDamage() / 3) ;
    }
}