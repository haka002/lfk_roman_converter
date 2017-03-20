<?php

namespace RomanNumberConverter\Entity;

class RomanNumberNine extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getSmallLetter() . $this->greatness->getNextLetter();
	}
}
