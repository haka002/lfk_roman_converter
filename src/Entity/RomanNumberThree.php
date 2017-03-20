<?php

namespace RomanNumberConverter\Entity;

class RomanNumberThree extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getSmallLetter() . $this->greatness->getSmallLetter() . $this->greatness->getSmallLetter();
	}
}
