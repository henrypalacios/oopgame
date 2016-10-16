<?php


namespace App;


abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit attack at :opponent';

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }

    public function setDamage(int $damage)
    {
        $this->damage = $damage;
    }



}