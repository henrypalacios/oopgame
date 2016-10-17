<?php


namespace App\armor;

use App\Armor;
use App\Attack;
use App\Unit;

Class SilverArmor extends Armor
{
    public function __construct(Unit $unit)
    {
        $weapon = $unit->getWeapon();
        $weapon->setDamage(80);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

}