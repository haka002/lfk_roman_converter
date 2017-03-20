<?php

use RomanNumberConverter\Entity\RomanGreatness;

class RomanGreatnessTest extends PHPUnit_Framework_TestCase
{
	public function testConstructor()
	{
		$greatness = $this->createRomanGreatness(1);

		$this->assertNotEmpty($greatness->getBigLetter() . $greatness->getSmallLetter());
	}

	/**
	 * @param string $expected
	 * @param int    $greatness
	 *
	 * @dataProvider getFunctionsProvider
	 */
	public function testGetFunctions($expected, $greatness)
	{
		$greatness = $this->createRomanGreatness($greatness);

		$this->assertEquals($expected, $greatness->getSmallLetter() . $greatness->getBigLetter() . $greatness->getNextLetter());
	}

	/**
	 * @param int $greatness
	 *
	 * @return RomanGreatness
	 */
	private function createRomanGreatness($greatness)
	{
		return new RomanGreatness($greatness);
	}

	/**
	 * @return array
	 */
	public function getFunctionsProvider()
	{
		return [
			['IVX', 1],
			['XLC', 2],
			['CDM', 3],
			['M', 4],
		];
	}
}
