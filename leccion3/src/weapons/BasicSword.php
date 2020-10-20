<?php

namespace Styde\Weapons;

use Styde\Weapon;
use Styde\Unit;

class BasicSword extends Weapon
{
    protected $damage = 20;
    protected $description = ":unit ataca con la espada a :opponent";
}