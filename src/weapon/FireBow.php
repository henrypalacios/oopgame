<?php


namespace App\weapon;


use App\Weapon;

class FireBow extends BasicBow
{
    protected $damage = 80;
    protected $minDamage = 40;
    protected $magical = true;
}