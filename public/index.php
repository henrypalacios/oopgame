<?php

namespace App;

require '../vendor/autoload.php';


$jon = new Soldier("Jon Snow", new weapon\BasicSword);
$ramsay = new Archer("Ramsay Bolton", new weapon\BasicBow);

$jon->attack($ramsay);
$ramsay->attack($jon);
$ramsay->attack($jon);
$jon->attack($ramsay);