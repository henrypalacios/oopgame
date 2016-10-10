<?php


namespace App\armor;


use App\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage(int $damage)
    {
        return $damage / 2;
    }
}