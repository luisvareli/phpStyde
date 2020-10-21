<?php

use Styde\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name' => 'Luis',
    'last_name' => 'Vargas',
]);

$user->nickname = 'Lewiis';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}

