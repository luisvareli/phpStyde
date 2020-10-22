<?php

use Styde\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
            'name'=>'Luis Vargas',
            'email'=>'luis@gmail.com',
            'website'=>'https://styde.net',
        ]);

        $this->assertSame('Luis Vargas', $user['name']);

        $this->assertSame('luis@gmail.com', $user['email']);

        $this->assertSame('https://styde.net', $user['website']);
    }
}

class UserTest extends Model implements ArrayAccess {

    public function offsetExists($offset)
    {

    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}