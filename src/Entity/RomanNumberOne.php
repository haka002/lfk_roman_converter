<?php

namespace RomanNumberConverter\Entity;

class RomanNumberOne extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getSmallLetter();
	}
}
