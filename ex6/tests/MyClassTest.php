<?php

use PHPUnit\Framework\TestCase;

require_once 'src/MyClass.php';

class MyClassTest extends TestCase
{

    #Resultado de teste:
    #OK (8 tests, 13 assertions)
    
    public function testAddMethods()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->disableOriginalConstructor()
                            ->addMethods(['metodo1', 'metodo2'])
                            ->getMock();

        $this->assertTrue(method_exists($myClassMock, 'metodo1'));
        $this->assertTrue(method_exists($myClassMock, 'metodo2'));
    }

    public function testSetConstructorArgs()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->setConstructorArgs(['arg1', '2'])
                            ->getMock();

        $this->assertEquals('arg1', $myClassMock->arg1);
        $this->assertEquals('2', $myClassMock->arg2);
    }

    public function testSetMockClassName()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->disableOriginalConstructor()
                            ->setMockClassName('Nomeado')
                            ->getMock();

        $reflectionClass = new ReflectionClass($myClassMock);

        $this->assertEquals('Nomeado', $reflectionClass->getName());
    }

    public function testDisableOriginalConstructor()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->disableOriginalConstructor()
                            ->getMock();

        $this->assertNull($myClassMock->arg1);
        $this->assertNull($myClassMock->arg2);
    }

    public function testDisableOriginalClone()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->disableOriginalConstructor()
                            ->disableOriginalClone()
                            ->getMock();

        $newClone = clone $myClassMock;

        $this->assertNotSame($myClassMock, $newClone);
    }

    public function testDisableAutoload()
    {

        $myClassMock = $this->getMockBuilder(MyClass::class)
                            ->disableAutoload()
                            ->disableOriginalConstructor()
                            ->getMock();

        $this->assertFalse(class_exists('notExistClass', false));
    }


    public function testMethodWillReturn()
    {

        $myClassMock = $this->createMock(MyClass::class);

        $myClassMock->expects($this->once())
            ->method('addValue')
            ->willReturn(1);

        $this->assertEquals(1, $myClassMock->addValue(1));
    }

    public function testMethodReturnSelf()
    {

        $myClassMock = $this->createMock(MyClass::class);

        $myClassMock->expects($this->once())
                    ->method('addValue')
                    ->willReturnSelf();

        $this->assertSame($myClassMock, $myClassMock->addValue(1));
    }
}