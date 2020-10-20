<?php

namespace Styde\Weapons;

use Styde\Weapon;
use Styde\Unit;

class BasicBow extends Weapon
{
    protected $damage = 40;
    protected $description = ":unit dispara una flecha :opponent";
}