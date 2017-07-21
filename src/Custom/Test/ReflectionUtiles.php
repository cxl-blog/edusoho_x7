<?php

/**
 * Created by PhpStorm.
 * User: kuozhi
 * Date: 17-7-21
 * Time: 上午8:35
 */
namespace Custom\Test;

use Custom\Test\Person;
class ReflectionUtiles
{
    function reflection($classname)
    {
        $class = new \ReflectionClass($classname);
        $properties = $class->getProperties();
        return $properties;
    }

    function  methodtest($classname)
    {
        $class = new \ReflectionClass($classname);
        $instance = $class->newInstance();
        $method = $class->getMethod('method');
        $method->setAccessible(true);
        return $method->invoke($instance);
    }
    function  getproperty(Person $p, $name)
    {
        if($name == 'name')
        {
            return $p->getName();
        }
        if ($name == 'id'){
            return $p->getId();
        }
    }

}

?>