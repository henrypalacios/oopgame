<?php


namespace App\weapon;


use App\Weapon;

class FireBow extends BasicBow
{
    protected $damage = 80;
    protected $minDamage = 40;
    protected $magical = true;
    protected $description = ':unit threw the arrows of fire at :oponent';
}