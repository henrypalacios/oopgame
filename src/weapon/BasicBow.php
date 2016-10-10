<?php


namespace App\Weapon;


use App\Unit;

class BasicBow extends Bow
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} threw the arrows at {$opponent->getName()}";
    }
}