<?php

namespace App;


interface Armor
{
    public function absorbDamage(Attack $attack);
}