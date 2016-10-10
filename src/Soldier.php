<?php


namespace App;


use App\weapon\Sword;

class Soldier extends Unit
{

    public function __construct(string $name, Sword $weapon)
    {
        parent::__construct($name, $weapon);
    }

}