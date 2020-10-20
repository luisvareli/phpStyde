<?php

namespace Styde;

require '../vendor/autoload.php';

$raw = new Unit('Raw', new Weapons\BasicSword);

$raw->setArmor(new Armors\SilverArmor());

$lewiisin = new Unit('Lewiisin', new Weapons\FireBow);
$lewiisin = new Unit('Lewiisin', new Weapons\FireBow);

$lewiisin->attack($raw);

$lewiisin->attack($raw);

$raw->attack($lewiisin);
