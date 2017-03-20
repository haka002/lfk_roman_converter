<?php

namespace RomanNumberConverter\Entity;

class RomanGreatness
{
	/**
	 * @var string
	 */
	protected $smallLetter;

	/**
	 * @var string
	 */
	protected $bigLetter;

	/**
	 * @var string
	 */
	protected $nextLetter;

	/**
	 * The array og the numbers in the same greatness.
	 * 
	 * @var array
	 */
	private $greatnessPairList = [
		1 => ['I', 'V', 'X'],
		2 => ['X', 'L', 'C'],
		3 => ['C', 'D', 'M'],
		4 => ['M', null, null]
	];

	/**
	 * Sets the greatness by an integer, where integer means how many time you can divide by 10.
	 *
	 * @param int $greatness
	 */
	public function __construct($greatness)
	{
		$this->smallLetter = $this->greatnessPairList[$greatness][0];
		$this->bigLetter   = $this->greatnessPairList[$greatness][1];
		$this->nextLetter  = $this->greatnessPairList[$greatness][2];
	}

	/**
	 * @return string
	 */
	public function getSmallLetter()
	{
		return $this->smallLetter;
	}

	/**
	 * @return string
	 */
	public function getBigLetter()
	{
		return $this->bigLetter;
	}

	/**
	 * @return string
	 */
	public function getNextLetter()
	{
		return $this->nextLetter;
	}
}
