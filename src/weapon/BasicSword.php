<?php


namespace App\weapon;


use App\Unit;

class BasicSword extends Sword
{
    protected $damage = 100;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} attacked with the sword {$opponent->getName()}";
    }
}
