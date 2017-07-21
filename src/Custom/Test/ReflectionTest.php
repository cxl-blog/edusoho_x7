<?php
/**
 * Created by PhpStorm.
 * User: kuozhi
 * Date: 17-7-20
 * Time: 上午9:20
 */

namespace Custom\Test;

use Custom\Test\Person;
use Custom\Test\ReflectionUtiles;
use Topxia\Service\Common\BaseTestCase;

class ReflectionTest extends BaseTestCase
{
    function testReflection()
    {
        $person = new Person();
        $reflectionUtiles = new ReflectionUtiles();

        $test = $reflectionUtiles->getproperty($person, 'id');

        var_dump($test);
        //$this->assertArrayEquals('7' ,$test);
    }

}
?>