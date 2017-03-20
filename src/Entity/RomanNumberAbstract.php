<?php

namespace RomanNumberConverter\Entity;

abstract class RomanNumberAbstract
{
	/**
	 * @var RomanGreatness
	 */
	protected $greatness;

	/**
	 * @param RomanGreatness $greatness
	 */
	public function __construct(RomanGreatness $greatness)
	{
		$this->greatness = $greatness;
	}
}
