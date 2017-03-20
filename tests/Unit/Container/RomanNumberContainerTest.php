<?php

use RomanNumberConverter\Container\RomanNumberContainer;
use RomanNumberConverter\Entity\RomanNumberOne;

class RomanNumberContainerTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$container = new RomanNumberContainer();

		/** @var RomanNumberOne|PHPUnit_Framework_MockObject_MockObject $number */
		$number    = $this->createMock(RomanNumberOne::class);
		$number->expects($this->once())->method('__toString')->willReturn('X');

		$this->assertEmpty((string)$container);

		$container->add($number);

		$this->assertNotEmpty((string)$container);
	}
}
