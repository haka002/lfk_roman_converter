<?php

namespace RomanNumberConverter\Entity;

class RomanNumberSix extends RomanNumberAbstract
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->greatness->getBigLetter() . $this->greatness->getSmallLetter();
	}
}
