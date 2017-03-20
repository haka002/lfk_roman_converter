<?php

use RomanNumberConverter\Builder\RomanNumberBuilder;
use RomanNumberConverter\Entity\RomanGreatness;
use RomanNumberConverter\Entity\RomanNumberEight;
use RomanNumberConverter\Entity\RomanNumberFive;
use RomanNumberConverter\Entity\RomanNumberFour;
use RomanNumberConverter\Entity\RomanNumberNine;
use RomanNumberConverter\Entity\RomanNumberOne;
use RomanNumberConverter\Entity\RomanNumberSeven;
use RomanNumberConverter\Entity\RomanNumberSix;
use RomanNumberConverter\Entity\RomanNumberThree;
use RomanNumberConverter\Entity\RomanNumberTwo;

class RomanNumberBuilderTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var RomanNumberBuilder|PHPUnit_Framework_MockObject_MockObject
	 */
	private $builder;

	/**
	 * @var RomanGreatness|PHPUnit_Framework_MockObject_MockObject
	 */
	private $greatness;

	public function setUp()
	{
		$this->greatness = $this->createMock(RomanGreatness::class);
		$this->builder   = new RomanNumberBuilder();
	}

	public function testCreateOne()
	{
		$this->assertInstanceOf(RomanNumberOne::class, $this->builder->create(1, $this->greatness));
	}

	public function testCreateTwo()
	{
		$this->assertInstanceOf(RomanNumberTwo::class, $this->builder->create(2, $this->greatness));
	}

	public function testCreateThree()
	{
		$this->assertInstanceOf(RomanNumberThree::class, $this->builder->create(3, $this->greatness));
	}

	public function testCreateFour()
	{
		$this->assertInstanceOf(RomanNumberFour::class, $this->builder->create(4, $this->greatness));
	}

	public function testCreateFive()
	{
		$this->assertInstanceOf(RomanNumberFive::class, $this->builder->create(5, $this->greatness));
	}

	public function testCreateSix()
	{
		$this->assertInstanceOf(RomanNumberSix::class, $this->builder->create(6, $this->greatness));
	}

	public function testCreateSeven()
	{
		$this->assertInstanceOf(RomanNumberSeven::class, $this->builder->create(7, $this->greatness));
	}

	public function testCreateEight()
	{
		$this->assertInstanceOf(RomanNumberEight::class, $this->builder->create(8, $this->greatness));
	}

	public function testCreateNine()
	{
		$this->assertInstanceOf(RomanNumberNine::class, $this->builder->create(9, $this->greatness));
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testCreateException()
	{
		$this->assertInstanceOf(RomanNumberOne::class, $this->builder->create(0, $this->greatness));
	}
}
