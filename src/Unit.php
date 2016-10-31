<?php


namespace App;


use App\armor\MissingArmor;

class Unit
{
    const MAX_DAMAGE = 100;

    protected $name;
    protected $hp = 100;
    protected $armor;
    protected $weapon;

    public function __construct(string $name, Weapon $weapon = null)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = New MissingArmor();
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getWeapon() : Weapon
    {
        return $this->weapon;
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        Log::info(
            $attack->getDescription($this, $opponent)
        );
        $opponent->takeDamage($attack);
    }

    private function die()
    {
        Log::info("$this->name is dead");
        exit();
    }

    public function takeDamage(Attack $attack)
    {
        $this->setHp(
            $this->armor->absorbDamage($attack)
        );

        Log::info("{$this->name} now have {$this->hp} points of life", true);

        if ($this->hp <= 0) {
           $this->die();
        }
    }

    public function setHp($damage)
    {
        if ($damage > static::MAX_DAMAGE) {
            $damage = static::MAX_DAMAGE;
        }

        $this->hp = $this->hp - $damage;
    }

    public static function createArcher()
    {
        $archer = new Unit("Ramsay Bolton", new weapon\BasicBow);
        $archer->setArmor(new armor\MissingArmor);

        return $archer;
    }

}