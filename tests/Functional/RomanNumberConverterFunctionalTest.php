<?php

use RomanNumberConverter\Builder\RomanNumberBuilder;
use RomanNumberConverter\Container\RomanNumberContainer;
use RomanNumberConverter\Model\RomanNumberConverter;

class RomanNumberConverterFunctionalTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @param int $expected
	 * @param int $number
	 *
	 * @dataProvider convertProvider
	 */
	public function testConvert($expected, $number)
	{
		$container = new RomanNumberContainer();
		$builder   = new RomanNumberBuilder();
		$converter = new RomanNumberConverter($builder, $container);

		$this->assertEquals($expected, $converter->convert($number));
	}

	/**
	 * @return array
	 */
	public function convertProvider()
	{
		return [
			['I', 1],
			['X', 10],
			['L', 50],
			['C', 100],
			['D', 500],
			['M', 1000],
			['II', 2],
			['XX', 20],
			['CC', 200],
			['CD', 400],
			['IX', 9],
			['CM', 900],
			['MMCDLXXI', 2471],
			['MCMXCIX', 1999],
			['XIII', 13],
			['MMMI', 3001],
			['MMMCMXCIX', 3999],
			['DCLXXXVI', 686]
		];
	}
}
