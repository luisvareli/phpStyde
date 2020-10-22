<?php
require "../vendor/autoload.php";

use Styde\User;

$user = new User([
    'first_name' => 'Walter',
    'last_name' => 'White',
    'birthDate' => '07/09/1959',
]);

echo "{$user['first_name']} tiene {$user['age']} años";