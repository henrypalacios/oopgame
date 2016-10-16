<?php

namespace App;

require '../vendor/autoload.php';


$jon = new Unit("Jon Snow", new weapon\BasicSword);
$ramsay = new Unit("Ramsay Bolton", new weapon\FireBow);
$ramsay->setArmor(new armor\BronzeArmor);

$jon->attack($ramsay);

$ramsay->attack($jon);
$jon->setArmor(new armor\SilverArmor($jon));
$ramsay->attack($jon);

$jon->attack($ramsay);
$ramsay->attack($jon);
$jon->attack($ramsay);