<?php

use Styde\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    protected function newModel(array $attributes = [])
    {
      return new class($attributes) extends Model { };
    }

    public function test_offset_get()
    {


        $user = $this->newModel($attributes = [
            'name'=>'Luis Vargas',
            'email'=>'luis@gmail.com',
            'website'=>'https://styde.net',
        ]);

        $this->assertSame('Luis Vargas', $user['name']);

        $this->assertSame('luis@gmail.com', $user['email']);

        $this->assertSame('https://styde.net', $user['website']);
    }


    public function test_offset_exists()
    {
        $user = $this->newModel([
            'name'=>'Luis Vargas',
        ]);

       $this->assertTrue(isset($user['name']));

       $this->assertFalse(empty($user['name']));

       $this->assertFalse(isset($user['email']));

       $this->assertTrue(empty($user['email']));
    }

    /** @test  */
    function it_set_and_get_values_with_array_access ()
    {
        $user = $this->newModel();

        $user['name'] = 'Luis Vargas';

        $this->assertSame('Luis Vargas',$user['name']);

    }
    /** @test  */
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = $this->newModel();

        $user['name'] = 'Luis Vargas';
        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}
