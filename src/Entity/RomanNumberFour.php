<?php

namespace RomanNumberConverter\Entity;

class RomanNumberFour extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getSmallLetter() . $this->greatness->getBigLetter();
	}
}
