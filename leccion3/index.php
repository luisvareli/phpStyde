<?php

namespace Styde;

require 'src/helpers.php';
require 'vendor/armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar $className");

    if (strpos($className, 'Styde\\') === 0) {
        $className = str_replace('Styde\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new BronzeArmor();

$raw = new Soldier('Raw');

$lewiisin = new Archer('Lewiisin');
//$lewiisin ->move('el norte');
$lewiisin->attack($raw);

$raw->setArmor(new CursedArmor);

$lewiisin->attack($raw);

$raw->attack($lewiisin);
