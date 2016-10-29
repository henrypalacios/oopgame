<?php


namespace App;


abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    public function setDamage(int $damage)
    {
        $this->damage = $damage;
    }

    public function getDescriptionKey()
    {
        return str_replace('App\weapon\\', '', get_class($this)).'Attack';
    }

}