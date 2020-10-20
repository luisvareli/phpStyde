<?php

namespace Styde;

require '../vendor/autoload.php';


Translator::set([
    'BasicBowAttack'=> ':unit dispara una flecha :opponent',
    'BasicSwordAttack'=> ':unit ataca con la espada a :opponent',
    'CrossBowAttack'=> ':unit dispara una flecha a :opponent',
    'FireBowAttack'=>  ':unit dispara una flecha de fuego :opponent',
]);

Log::setLogger(new HtmlLogger());

$raw = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();

$lewiisin = new Unit('Lewiisin', new Weapons\FireBow);

$lewiisin->attack($raw);

$lewiisin->attack($raw);

$raw->attack($lewiisin);
