<?php


namespace App;


class Attack
{
    private $damage;
    private $magical;
    private $description;

    public function __construct(int $damage, bool $magical, string $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attacker, Unit $opponent) {
        return str_replace(
            [':unit', ':oponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }
}