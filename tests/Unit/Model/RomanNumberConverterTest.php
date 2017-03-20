<?php

use RomanNumberConverter\Builder\RomanNumberBuilder;
use RomanNumberConverter\Container\RomanNumberContainer;
use RomanNumberConverter\Entity\RomanNumberOne;
use RomanNumberConverter\Model\RomanNumberConverter;

class RomanNumberConverterTest extends PHPUnit_Framework_TestCase
{
	public function testConvert()
	{
		/** @var RomanNumberOne|PHPUnit_Framework_MockObject_MockObject $builder */
		$romanNumber = $this->createMock(RomanNumberOne::class);
		/** @var RomanNumberBuilder|PHPUnit_Framework_MockObject_MockObject $builder */
		$builder     = $this->createMock(RomanNumberBuilder::class);
		$builder->expects($this->any())->method('create')->with()->willReturn($romanNumber);

		/** @var RomanNumberContainer|PHPUnit_Framework_MockObject_MockObject $container */
		$container = $this->createMock(RomanNumberContainer::class);
		$container->expects($this->any())->method('add')->with($romanNumber);

		$container->expects($this->once())->method('__toString')->willReturn('X');

		$converter = new RomanNumberConverter($builder, $container);

		$this->assertEquals('X', $converter->convert(10));
	}

	/**
	 * @param int $number
	 *
	 * @expectedException \InvalidArgumentException
	 *
	 * @dataProvider convertWithExceptionProvider
	 */
	public function testConvertWithException($number)
	{
		/** @var RomanNumberBuilder|PHPUnit_Framework_MockObject_MockObject $builder */
		$builder   = $this->createMock(RomanNumberBuilder::class);
		/** @var RomanNumberContainer|PHPUnit_Framework_MockObject_MockObject $container */
		$container = $this->createMock(RomanNumberContainer::class);

		$converter = new RomanNumberConverter($builder, $container);

		$converter->convert($number);
	}

	/**
	 * @return array
	 */
	public function convertWithExceptionProvider()
	{
		return [
			[0],
			[null],
			['zt'],
			[-1]
		];
	}
}
