<?php

use Styde\Str;

class StrTest extends PHPUnit\Framework\TestCase {

    public function test_studly_method_convert_strings()
    {
        $this->assertSame(
            'Name',Str::studly(
                'name'),
            'Llamar a Str::studly con name no retorna el valor esperado
         Name'
        );

        $this->assertSame(
            'FullName', Str::studly('full_name'),
            'Llamar a Str::studly con fullname no retorna el valor esperado
         FullName'
        );

        $this->assertSame(
            'BirthDate', Str::studly('birth_date'),
            'Llamar a Str::studly con birth_date no retorna el valor esperado
         FullName'
        );

        if(Str::studly('name') != 'Name'){
            exit("Llamar a Str::studly con name no retorna el valor esperado
         Name");
        }

        if(Str::studly('full_name') != 'FullName'){
            exit("Llamar a Str::studly con fullname no retorna el valor esperado
         FullName");
        }

        if(Str::studly('birth_date') != 'BirthDate'){
            exit("Llamar a Str::studly con birth_date no retorna el valor esperado
         BirthDate");
        }
    }
}