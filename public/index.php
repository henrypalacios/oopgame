<?php

namespace App;

require '../vendor/autoload.php';

Translator::set(
    array(
        'BasicBowAttack' => ':unit Lanzó Flechas a Oponente :opponent',
        'BasicSwordAttack' => ':unit atacó con la espada a :opponent',
        'FireBowAttack' => ':unit Lanzó flechas de fuego a :opponent'
    )
);

$jon = new Unit("Jon Snow", new weapon\BasicSword);
$ramsay = Unit::createArcher()
            ->setWeapon(new weapon\FireBow())
            ->setArmor(new armor\BronzeArmor());

$jon->attack($ramsay);

$ramsay->attack($jon);
$jon->setArmor(new armor\SilverArmor($jon));
$ramsay->attack($jon);

$jon->attack($ramsay);
$ramsay->attack($jon);
$jon->attack($ramsay);