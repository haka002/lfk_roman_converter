<?php

namespace RomanNumberConverter\Entity;

class RomanNumberTwo extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getSmallLetter() . $this->greatness->getSmallLetter();
	}
}
