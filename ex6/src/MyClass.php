<?php

class MyClass
{

    public $arg1;
    public $arg2;
    public $value;
    public $mockMethods = [];
    public $constructorArgs = null;
    public $disableConstructor = false;

    public function __construct($arg1, $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    public function addMethod($methodName)
    {
        $this->mockMethods[] = $methodName;
    }


    public function setConstructorArgs($args)
    {
        $this->constructorArgs = $args;
    }

    public function disableOriginalConstructor()
    {
        $this->disableConstructor = true;
    }

    public function addValue($value)
    {
        $this->value = $value;
    }
}