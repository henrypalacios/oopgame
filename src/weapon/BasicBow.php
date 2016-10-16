<?php


namespace App\weapon;

use App\Weapon;

class BasicBow extends Weapon
{
    protected $description = ':unit threw the arrows at :oponent';
    protected $minDamage = 30;
    protected $damage = 60;

    public function __construct()
    {
        $this->setDamage();
    }

    public function setDamage(int $damage = 0)
    {
        if ($damage > $this->damage) {
            $this->damage = $damage;
        }
        $this->damage = rand($this->minDamage, $this->damage);
    }

}