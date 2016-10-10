<?php


namespace App;


abstract class Unit
{
    protected $name;
    protected $hp = 100;
    protected $armor;
    protected $weapon;

    public function __construct(string $name, Weapon $weapon = null)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    protected function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function attack(Unit $opponent)
    {
        show(
            $this->weapon->getDescription($this, $opponent)
        );
        $opponent->takeDamage($this->weapon->getDamage());
    }

    private function die()
    {
        show("$this->name is dead");
        exit();
    }

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} now have {$this->hp} points of life", true);

        if ($this->hp <= 0) {
           $this->die();
        }
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }

}