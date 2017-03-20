<?php

namespace RomanNumberConverter\Container;

use RomanNumberConverter\Entity\RomanNumberAbstract;

class RomanNumberContainer
{
	/**
	 * @var RomanNumberAbstract[]
	 */
	private $numbers = [];

	public function add(RomanNumberAbstract $number)
	{
		$this->numbers[] = $number;
	}

	public function __toString()
	{
		$toString = '';

		foreach ($this->numbers as $number)
		{
			$toString .= (string)$number;
		}

		return $toString;
	}
}
