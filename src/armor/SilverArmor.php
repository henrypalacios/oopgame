<?php


namespace App\armor;

use App\Armor;
use App\Attack;
use App\Unit;

Class SilverArmor implements Armor
{
    public function __construct(Unit $unit)
    {
        $weapon = $unit->getWeapon();
        $weapon->setDamage(80);
    }

    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 2;
        }

        return $attack->getDamage();
    }
}